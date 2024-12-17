<?php
session_start();
include 'db.php'; // Incluye la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Preparar la consulta SQL usando mysqli
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = ?");
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conn->error);
    }

    // Asociar parámetros
    $stmt->bind_param("s", $username);
    $stmt->execute();

    // Obtener el resultado
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verificar credenciales
    if ($user && password_verify($password, $user['password'])) {
        // Guardar datos en la sesión
        $_SESSION['username'] = $user['username'];
        $_SESSION['rol'] = $user['rol']; // Guardamos el rol en sesión
        header("Location: index.php");
        exit();
    } else {
        // Si las credenciales son incorrectas
        echo "<p style='color: red; text-align: center;'>Credenciales incorrectas.</p>";
    }

    // Cerrar el statement y la conexión
    $stmt->close();
    $conn->close();
}
?>
