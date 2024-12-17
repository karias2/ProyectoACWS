<?php
session_start(); // Iniciar sesión para verificar autenticación y roles
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>PaMonchar</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Custom Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <script src="/js/rutinas.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>

<body class="d-flex flex-column h-100 --bs-emphasis-color">

    <?php include '../includes/header.php'; ?>

 
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
  <footer class="footer">
    <h2>Contáctanos</h2>
    <h4>+506 8745 2819</h4>
    <div style="margin: 10px 0;">
      <i class="fa-brands fa-facebook fa-xl icon-facebook"></i>
      <i class="fa-brands fa-instagram fa-xl icon-instagram"></i>
      <i class="fa-brands fa-x-twitter fa-xl icon-twitter"></i>
      <i class="fa-brands fa-whatsapp fa-xl icon-whatsapp"></i>
      
    </div>
    <p class= "derechos">© Derechos reservados</p>
  </footer>
</body>

</html>