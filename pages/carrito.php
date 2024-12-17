<?php
include '../db.php';

// Inicializar el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// --- AGREGAR PRODUCTO AL CARRITO ---
if (isset($_POST['agregar'])) {
    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    // Verificar si el producto ya existe en el carrito
    if (!array_key_exists($id_producto, $_SESSION['carrito'])) {
        $_SESSION['carrito'][$id_producto] = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => 1
        ];
    } else {
        // Si ya existe, incrementa la cantidad
        $_SESSION['carrito'][$id_producto]['cantidad']++;
    }
}

// --- ELIMINAR PRODUCTO DEL CARRITO ---
if (isset($_POST['eliminar'])) {
    $id_producto = $_POST['id_producto'];
    unset($_SESSION['carrito'][$id_producto]);
}

// --- MOSTRAR TODOS LOS PRODUCTOS ---
// $resultado = $conn->query("SELECT * FROM productos");
$resultado = $pdo->query("SELECT * FROM productos");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ordenar - Carrito</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #f4f4f4; }
        form { display: inline; }
        h1, h2 { text-align: center; }
    </style>
</head>
<body>
    
    <!-- Mostrar carrito -->
    <h2>Carrito de Compras</h2>
    <?php if (!empty($_SESSION['carrito'])) { ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Acción</th>
            </tr>
            <?php 
            $total = 0;
            foreach ($_SESSION['carrito'] as $id => $producto) { 
                $subtotal = $producto['precio'] * $producto['cantidad'];
                $total += $subtotal;
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                    <td>$<?php echo number_format($producto['precio'], 2); ?></td>
                    <td><?php echo $producto['cantidad']; ?></td>
                    <td>$<?php echo number_format($subtotal, 2); ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="id_producto" value="<?php echo $id; ?>">
                            <button type="submit" name="eliminar">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <th colspan="3">Total</th>
                <th colspan="2">$<?php echo number_format($total, 2); ?></th>
            </tr>
        </table>
    <?php } else { ?>
        <p>No hay productos en el carrito.</p>
    <?php } ?>
</body>
</html>

