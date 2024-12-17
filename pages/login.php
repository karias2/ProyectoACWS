<!DOCTYPE html>
<html lang="es">
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <h2>Iniciar Sesión</h2>
    <form action="../login_process.php" method="POST">
        <label for="username">Usuario:</label>
        <input type="text" name="username" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
