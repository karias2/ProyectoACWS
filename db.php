
<?php

// Configuración de conexión a la base de datos
$host = "localhost";
$user = "root"; 
$password = ""; 
$database = "larutadelsabor"; 

$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
