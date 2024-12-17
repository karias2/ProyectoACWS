<?php
session_start(); // Iniciar sesión para verificar autenticación y roles
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

</head>

<body class="d-flex flex-column h-100 --bs-emphasis-color">

  <!-- 1 Fragmento tabla de navegación -->

  <?php include 'includes/header.php'; ?>

<!-- Carrusel -->
  <div class="card-body p-4">
    <div class="container"
      style="background-color: #f8f4e8; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6); border-radius: 0.375rem; color: #000; font-weight: bold;">
      <div id="ofertasCarousel" class="carousel slide" data-bs-ride="carousel" style="background-color: #f8f9fa;">
        <div class="carousel-inner">

          <!-- Primera tarjeta -->
          <div class="carousel-item active">
            <div class="row row-cols-1 g-4">
              <div class="col">
                <div class="card h-100 shadow-sm">
                  <img src="https://th.bing.com/th/id/OIP.gdn8D0XxBBFdsFHOQkDVUwHaEK?rs=1&pid=ImgDetMain"
                    class="card-img-top" alt="Imagen 1">
                    <div class="card-body">
                    <h5 class="card-title">Descripción de la Imagen 1</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Segunda tarjeta -->
          <div class="carousel-item">
            <div class="row row-cols-1 g-4">
              <div class="col">
                <div class="card h-100 shadow-sm">
                  <img src="https://th.bing.com/th/id/OIP.6TvVRouyDxliUU-rS4Us3QHaFE?rs=1&pid=ImgDetMain"
                    class="card-img-top" alt="Imagen 2">
                  <div class="card-body">
                    <h5 class="card-title">Descripción de la Imagen 2</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Botones de control -->
        <button class="carousel-control-prev" type="button" data-bs-target="#ofertasCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#ofertasCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  
  <!-- Cards -->
  <section class="container mt-4"
    style="background-color: #f8f4e8; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6); border-radius: 0.375rem; padding: 20px;">
    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
      <!-- Card 1 -->
      <div class="col mb-4">
        <div class="card h-100 custom-card">
          <img src="https://danzadefogones.com/wp-content/uploads/2024/08/ensalada-de-quinoa.jpg" class="card-img-top"
            alt="Ensalada de Quinoa">
          <div class="card-body">
            <h5 class="card-title">Ensalada de Quinoa</h5>
            <p class="card-text">Una ensalada fresca con quinoa, vegetales, y aderezo especial.</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col mb-4">
        <div class="card h-100 custom-card">
          <img src="https://plenilunia.com/wp-content/uploads/2014/02/Depositphotos_28207805_l.jpg" class="card-img-top"
            alt="Smoothie Verde">
          <div class="card-body">
            <h5 class="card-title">Smoothie Verde</h5>
            <p class="card-text">Bebida nutritiva con frutas y verduras verdes.</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col mb-4">
        <div class="card h-100 custom-card">
          <img src="https://melhorcomsaude.com.br/wp-content/uploads/2021/10/wrap-vegetariano-500x334-1.jpg"
            class="card-img-top" alt="Wrap Vegetariano">
          <div class="card-body">
            <h5 class="card-title" style="font-weight: bold;">Wrap Vegetariano</h5>
            <p class="card-text">Delicioso wrap relleno de vegetales frescos y hummus.</p>
          </div>
        </div>
      </div>
    </div>         
  </section>


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