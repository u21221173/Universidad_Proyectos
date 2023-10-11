<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_apellidos = $_POST["nombre_apellidos"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];
    $direccion = $_POST["direccion"];
    $mensaje = $_POST["mensaje"];

    // Puedes realizar acciones adicionales aquí, como enviar un correo electrónico, almacenar en una base de datos, etc.

    // Redirige a una página de confirmación o gracias.
    header("Location: confirmacion.php");
    exit();
}
?>
