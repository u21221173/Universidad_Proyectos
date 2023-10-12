<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "/xampp/htdocs/SABOR_SECRETO/Modelo/conexion.php"; // Ajusta la ruta según tu configuración

    $nom_menu = $_POST["nom_menu"];
    $cantidad_personas = $_POST["cantidad_personas"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $metodo_pago = $_POST["medio_pago"];
    $tipo_comprobante = $_POST["tipo_comprobante"];
    $dni_ruc = $_POST["ruc_dni"];
    $nombres_razon_social = $_POST["razon_social"];
    $direccion = $_POST["direccion"];

    // Preparar la consulta SQL
    $sql = "INSERT INTO registrar_reserva (nom_menu, n_person, fecha_reserva, reser_hora, medio_pago, tipo_comprobante, ruc_dni, razon_social, direccion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar la sentencia
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        // Vincular los parámetros
        $stmt->bind_param("sissssiss", $nom_menu, $cantidad_personas, $fecha, $hora, $metodo_pago, $tipo_comprobante, $dni_ruc, $nombres_razon_social, $direccion);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Redirige a la página de confirmación con los parámetros que desees
            header("Location: /Vista/confirmar_pedido.php?nombres=" . urlencode($nombres_razon_social));
            exit();
        } else {
            echo "Error al ejecutar la consulta: " . $stmt->error;
        }

        // Cierra la sentencia
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }
}
?>






