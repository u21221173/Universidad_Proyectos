<?php
require_once "/xampp/htdocs/SABOR_SECRETO/Modelo/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $dni = $_POST["dni"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];
    $ruc = $_POST["ruc"];
    $razon_social = $_POST["razon_social"];
    $direccion_fiscal = $_POST["direccion_fiscal"];

    // Preparar la consulta SQL
    $sql = "INSERT INTO clientes (nombres, apellidos, dni, direccion, correo, celular, ruc, razon_social, direccion_fiscal)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar la sentencia
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        // Vincular los parámetros
        $stmt->bind_param("ssissssss", $nombres, $apellidos, $dni, $direccion, $correo, $celular, $ruc, $razon_social, $direccion_fiscal);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Redirige a la página de confirmación
            header("Location: /Vista/confirmar_registro.php");
            exit();
        } else {
            echo "Error al ejecutar la consulta: " . $stmt->error;
        }

        // Cierra la sentencia
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }

    if ($stmt->execute()) {
        // Inicia una sesión
        session_start();
    
        // Almacena el nombre del usuario en la sesión
        $_SESSION['nombres'] = $nombres;
    
        // Redirige a la página de confirmación
        header("Location: confirmar_registro.php");
        exit();
    }

}
?>
