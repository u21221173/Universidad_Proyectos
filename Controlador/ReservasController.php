<?php
// Incluye el archivo de conexión a la base de datos
include('../Modelo/conexion.php');

// Realiza la consulta SQL para obtener las imágenes
$sql = "SELECT nombre, ruta_imagen FROM imagenes WHERE categoria = 'vegetariano' LIMIT 3";
$result = $conn->query($sql);

// Crea un array para almacenar los resultados
$imagenes_vegetarianas = array();
while ($row = $result->fetch_assoc()) {
    $imagenes_vegetarianas[] = $row;
}

// Realiza otra consulta para obtener las imágenes de la categoría 'tradicional'
$sql = "SELECT nombre, ruta_imagen FROM imagenes WHERE categoria = 'tradicional' LIMIT 3";
$result = $conn->query($sql);

// Crea un array para almacenar los resultados
$imagenes_tradicionales = array();
while ($row = $result->fetch_assoc()) {
    $imagenes_tradicionales[] = $row;
}

// Incluye la vista HTML
include('../Vista/reservas_1.php');

?>



