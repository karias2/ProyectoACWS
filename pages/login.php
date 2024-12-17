<!DOCTYPE html>
<html lang="es">

<head>
    <title>Iniciar Sesión</title>
    <?php include '../includes/header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="../login_process.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su usuario" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-login">Iniciar Sesión</button>
            </div>
        </form>
    </div>

    <footer class="footer">
        <h2>Contáctanos</h2>
        <h4>+506 8745 2819</h4>
        <div style="margin: 10px 0;">
            <i class="fa-brands fa-facebook fa-xl icon-facebook"></i>
            <i class="fa-brands fa-instagram fa-xl icon-instagram"></i>
            <i class="fa-brands fa-x-twitter fa-xl icon-twitter"></i>
            <i class="fa-brands fa-whatsapp fa-xl icon-whatsapp"></i>

        </div>
        <p class="derechos">© Derechos reservados</p>
    </footer>

</body>

</html>
