<?php
// Conexión a la base de datos
$host = "localhost";
$user = "root"; // Usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$database = "pamonchar"; // Nombre de la base de datos

$conn = new mysqli($host, $user, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Insertar usuario
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    // Validar que el rol sea correcto
    if ($rol !== 'admin' && $rol !== 'usuario') {
        echo "<p style='color: red;'>Error: El rol debe ser 'admin' o 'usuario'.</p>";
    } else {
        // Encriptar la contraseña con password_hash()
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        // Insertar datos en la base de datos
        $stmt = $conn->prepare("INSERT INTO usuarios (username, password, rol) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password_hashed, $rol);

        if ($stmt->execute()) {
            echo "<p style='color: green;'>Usuario creado exitosamente.</p>";
        } else {
            echo "<p style='color: red;'>Error al crear usuario: " . $conn->error . "</p>";
        }

        $stmt->close();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuario</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { width: 300px; margin: 0 auto; }
        input, select, button { display: block; width: 100%; margin-bottom: 10px; padding: 8px; }
        label { margin-bottom: 5px; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Insertar Usuario</h1>
    <form method="POST" action="">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>

        <label for="rol">Rol:</label>
        <select name="rol" id="rol" required>
            <option value="admin">Admin</option>
            <option value="usuario">Usuario</option>
        </select>

        <button type="submit" name="submit">Insertar Usuario</button>
    </form>
</body>
</html>
