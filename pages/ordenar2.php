<?php
session_start();

if ($_SESSION['rol'] !== 'usuario') {
    header("Location: login.php"); // Redirigir a login si no está autenticado
    exit();
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

</head>

<body class="d-flex flex-column h-100 --bs-emphasis-color">

    <?php include '../includes/header.php'; ?>

 
    <!-- Botones de Categorías -->
    <div class="container text-center category-btns">
        <button class="btn btn-secondary btn-custom" onclick="filterCategory('todas')">Todas</button>
        <button class="btn btn-secondary btn-custom" onclick="filterCategory('diabeticos')">Diabéticos</button>
        <button class="btn btn-secondary btn-custom" onclick="filterCategory('alergicos')">Alérgicos</button>
        <button class="btn btn-secondary btn-custom" onclick="filterCategory('vegetarianos')">Vegetarianos</button>
        <button class="btn btn-secondary btn-custom" onclick="filterCategory('intolerantes-lactosa')">Intolerantes a la Lactosa</button>
        <button class="btn btn-secondary btn-custom" onclick="filterCategory('tradicional')">Tradicional</button>
    </div>

    <!-- Sección de Comidas Responsiva -->
    <section class="container mt-4"
        style="background-color: #f8f4e8; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6); border-radius: 0.375rem; padding: 20px;">
        <h2>Platillos Disponibles</h2>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acción</th>
                </tr>
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($row['descripcion']); ?></td>
                        <td>$<?php echo number_format($row['precio'], 2); ?></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="id_producto" value="<?php echo $row['id_producto']; ?>">
                                <input type="hidden" name="nombre" value="<?php echo $row['nombre']; ?>">
                                <input type="hidden" name="precio" value="<?php echo $row['precio']; ?>">
                                <button type="submit" name="agregar">Agregar al Carrito</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
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

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function filterCategory(category) {
            const items = document.querySelectorAll('.menu-item');
            items.forEach(item => {
                if (category === 'todas' || item.classList.contains(category)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
