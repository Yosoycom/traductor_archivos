<?php
// Conexión a la base de datos (reemplaza con tus propios datos)
include_once 'conneccion.php';

// Consulta para obtener todos los productos
$sql = "SELECT id, nombre, stock_prodiuct FROM producto";
$stmt = $pdo->query($sql);
?>
