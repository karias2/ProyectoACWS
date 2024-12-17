<?php
session_start();

if ($_SESSION['rol'] !== 'usuario') {
    header("Location: login.php"); // Redirigir a login si no está autenticado
    exit();
}
include '../db.php';
include '../consultas/productos.php';
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php include '../includes/header.php'; ?>
</head>
<body class="d-flex flex-column h-100 --bs-emphasis-color">


    <!-- Sección de Comidas Responsiva -->
    <section class="container mt-4"
        style="background-color: #f8f4e8; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6); border-radius: 0.375rem; padding: 20px;">
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">  
            <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <div class="col-md-4 mb-4 menu-item">                   
                    <div class="card h-100 custom-card">
                        <img src="<?php echo htmlspecialchars($row['imagen_url']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['nombre']); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['nombre']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($row['descripcion']); ?></p>
                                <div class="price-badge">
                                    <span class="badge bg-primary">₡<?php echo number_format($row['precio'], 2); ?></span>
                                    <form method="POST" action="">
                                        <input type="hidden" name="id_producto" value="<?php echo $row['id_producto']; ?>">
                                        <input type="hidden" name="nombre" value="<?php echo $row['nombre']; ?>">
                                        <input type="hidden" name="precio" value="<?php echo $row['precio']; ?>">
                                        <button type="submit" name="agregar" class="btn-buy">
                                            <i class="fas fa-shopping-cart"></i> Comprar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>                                   
        </div>
    </section>        
                <div></div>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
