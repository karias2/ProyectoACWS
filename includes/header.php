<!DOCTYPE html>
<html lang="es">
<head>
<title>La ruta del Sabor</title>
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
</
</head>
<body>
    <main class="flex-shrink-0">

        <nav class="navbar navbar-expand-lg py-3"
        style="background: linear-gradient(to right, #a0d5af,#1f5b24 ); height: 110px; display: flex; justify-content: center; align-items: center;">
            <div class="container px-5" style="font-family:fantasy">
                <a class="navbar-brand" href="/AWCS/index.php"><span class="fw-bolder " style="font-size: 40px; color: #000000;">La ruta del
                    sabor</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
                    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <li class="nav-item px-2" style="font-family:fantasy; font-size: 24px;">
                    <a class="nav-link" href="/AWCS/pages/menu.php" style="color: #000000;"
                        onmouseover="this.style.color = '#ffffff ';" onmouseout="this.style.color = '#000000';">
                        <i class="fas fa-utensils"></i> Menú
                    </a>
                    </li>

                    <li class="nav-item px-2" style="font-family:fantasy; font-size: 24px;">
                    <a class="nav-link" href="/AWCS/pages/sucursal.php" style="color: #000000;"
                        onmouseover="this.style.color = '#ffffff ';" onmouseout="this.style.color = '#000000';">
                        <i class="fas fa-concierge-bell"></i> Sucursales
                    </a>
                    </li>


                    <?php if (isset($_SESSION['username'])): ?>
                        <!-- Módulos para usuarios autenticados -->
                        <?php if ($_SESSION['rol'] == 'usuario'): ?>
                            <li class="nav-item px-2" style="font-family:fantasy; font-size: 24px;">
                            <a class="nav-link" href="/AWCS/pages/ordenar.php" style="color: #000000;"
                                onmouseover="this.style.color = '#ffffff ';" onmouseout="this.style.color = '#000000';">
                                <i class="fas fa-concierge-bell"></i> Ordenar
                            </a>
                            </li>

                            <li class="nav-item px-2" style="font-family:fantasy; font-size: 24px;">
                            <a class="nav-link" href="/AWCS/pages/carrito.php" style="color: #000000;"
                                onmouseover="this.style.color = '#ffffff ';" onmouseout="this.style.color = '#000000';">
                                <i class="fa-solid fa-cart-shopping"></i> Carrito
                            </a>
                            </li>
                           
                        <?php endif; ?>

                        <?php if ($_SESSION['rol'] == 'admin'): ?>
                            <li><a href="/AWCS/pages/inventario.php">Inventario</a></li>
                        <?php endif; ?>

                        <li class="nav-item my-auto text-black mt-1" style="margin: 0 5px;">
                        <form method="post" action="/AWCS/logout.php">
                            <button class="btn" style="color: #000000;" onmouseover="this.style.color = '#ffffff ';"
                            onmouseout="this.style.color = '#000000';">
                            <i class="fas fa-right-from-bracket" style="font-size: 1.5em;"></i>
                            </button>
                        </form>
                        </li>
                    <?php else: ?>
                        <li class="nav-item my-auto text-white">
                        <a class="nav-menu-link nav-link" href="/AWCS/pages/login.php" style="color: #000000;"
                            onmouseover="this.style.color = '#ffffff ';" onmouseout="this.style.color = '#000000';">
                            <i class="fa fa-user-alt" style="font-size: 1.5em;"></i>
                        </a>
                        </li>
                    <?php endif; ?>

                </ul>
                </div>
            </div>
        </nav>
    </main>
</body>
</html>
