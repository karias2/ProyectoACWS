<?php
session_start(); // Iniciar sesión para verificar autenticación y roles
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php include '../includes/header.php'; ?>
</head>

<body class="d-flex flex-column h-100 --bs-emphasis-color">

    <br>
    <div class="map-container">
        <h1>Sucursal San Jose</h1>
        <hr>
        <!-- Insertar aquí la URL de Google Maps de la ubicación deseada -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1964.9742569543535!2d-84.0807422621453!3d9.93824204792348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2scr!4v1731909819185!5m2!1ses-419!2scr"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <hr>
        <p>Av.5, Calle 6, local #4</p>
    </div>

    <br>
    <div class="map-container">
        <h1>Sucursal Heredia</h1>
        <hr>
        <!-- Insertar aquí la URL de Google Maps de la ubicación deseada -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1225.770390257465!2d-84.11910046078125!3d9.998363737968841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2scr!4v1731909983783!5m2!1ses-419!2scr"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <hr>
        <p>Av. William H. Taft, Calle 4, local #3</p>
    </div>

     <!-- 10 footer -->
     <?php include '../includes/footer.php'; ?>
</body>

</html>