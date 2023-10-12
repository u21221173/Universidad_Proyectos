<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "/xampp/htdocs/SABOR_SECRETO/Modelo/conexion.php"; // Incluye el archivo de conexión

    require '/xampp/htdocs/SABOR_SECRETO/vendor/autoload.php'; // Incluye la librería PHPMailer

    $nombre_apellidos = $_POST["nombre_apellidos"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];
    $direccion = $_POST["direccion"];
    $mensaje = $_POST["mensaje"];

    // Validar que el campo "celular" tenga exactamente 9 dígitos

        // Preparar la consulta SQL
        $sql = "INSERT INTO contactenos (nom_ape, correo, celular, direccion, mensaje)
                VALUES (?, ?, ?, ?, ?)";

        // Preparar la sentencia
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            // Vincular los parámetros
            $stmt->bind_param("ssiss", $nombre_apellidos, $correo, $celular, $direccion, $mensaje);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                // Envío de correo de confirmación
                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Debes configurar el servidor SMTP
                $mail->SMTPAuth = true;
                $mail->Username = 'saborsecreto2023@gmail.com'; // Debes configurar tus credenciales de correo
                $mail->Password = 'dlzf brzl dduj gaom'; // Debes configurar tus credenciales de correo
                $mail->Port     = 587;
                $mail->setFrom('saborsecreto2023@gmail.com', 'SaborSecreto');
                $mail->addAddress($correo); // El destinatario será el correo proporcionado en el formulario

                $mail->isHTML(true);
                $mail->Subject = 'Confirmacion de envio de datos';
                $mail->Body = 'Gracias por contactarnos. Hemos recibido tus datos correctamente.';

                if (!$mail->send()) {
                    echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
                } else {
                    // Redirige a la página de confirmación
                    header("Location: confirmacion.php");
                    exit();
                }
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





