

<?php include '../db.php'; 

// Inicializar el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// --- AGREGAR PRODUCTO AL CARRITO ---
if (isset($_POST['agregar'])) {
    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    // Crear un producto para agregar al carrito
    $producto = [
        'id_producto' => $id_producto,
        'nombre' => $nombre,
        'precio' => $precio
    ];

    // Agregar el producto al carrito (sesión)
    $_SESSION['carrito'][] = $producto;
    header("Location: ordenar.php");
    exit();
}
// --- CONSULTAR PRODUCTOS DISPONIBLES ---
$query = "SELECT * FROM productos";
$resultado = $conn->query($query);

?>