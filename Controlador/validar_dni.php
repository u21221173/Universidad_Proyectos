<!-- validar_dni.php -->
<?php
require_once "/xampp/htdocs/SABOR_SECRETO/Modelo/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST["dni"];

    // Realiza una consulta para verificar si el cliente existe
    $sql = "SELECT nombres FROM clientes WHERE dni = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    $stmt->bind_result($nombres);
    if ($stmt->fetch()) {
        // El cliente existe, redirige a reservas_1.php con el nombre
        header("Location: /Vista/reservas_1.php?nombres=$nombres");
        exit();
    }else{
        header("Location: /Vista/registrar_cliente.php");
        exit();
    }
    
}
?>







