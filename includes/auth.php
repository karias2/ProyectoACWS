<?php
session_start();

function verificarAutenticacion() {
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
}

function verificarRol($rol) {
    if ($_SESSION['rol'] !== $rol) {
        echo "Acceso denegado. No tienes permisos para ver esta página.";
        exit();
    }
}
?>
