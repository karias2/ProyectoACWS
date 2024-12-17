<?php
session_start();
include '../includes/header.php';
include '../db.php';

// Inicializar carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Eliminar producto del carrito
if (isset($_POST['eliminar'])) {
    $id_producto = $_POST['id_producto'];
    foreach ($_SESSION['carrito'] as $key => $producto) {
        if ($producto['id_producto'] == $id_producto) {
            unset($_SESSION['carrito'][$key]);
            break;
        }
    }
    // Reorganizar el array
    $_SESSION['carrito'] = array_values($_SESSION['carrito']);
}

// Calcular el total del carrito
$total = 0;
foreach ($_SESSION['carrito'] as $producto) {
    $total += $producto['precio'];
}
?>

<!-- Título de la sección Carrito -->
<div class="container mt-5">
    <h2 class="text-center">Carrito de Compras</h2>

    <?php if (!empty($_SESSION['carrito'])) { ?>
        <!-- Tabla para mostrar los productos -->
        <table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del Platillo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['carrito'] as $index => $producto) { ?>
                    <tr>
                        <th scope="row"><?php echo $index + 1; ?></th>
                        <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                        <td>₡<?php echo number_format($producto['precio'], 2); ?></td>
                        <td>
                            <!-- Formulario para eliminar producto -->
                            <form method="POST" action="">
                                <input type="hidden" name="id_producto" value="<?php echo $producto['id_producto']; ?>">
                                <button type="submit" name="eliminar" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Mostrar el total -->
        <div class="text-right">
            <h4>Total: ₡<?php echo number_format($total, 2); ?></h4>
        </div>
    <?php } else { ?>
        <!-- Carrito vacío -->
        <div class="alert alert-warning text-center mt-4" role="alert">
            El carrito está vacío. <a href="ordenar.php" class="alert-link">¡Agrega platillos aquí!</a>
        </div>
    <?php } ?>
</div>

<?php include '../includes/footer.php'; ?>
