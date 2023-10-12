<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor Secreto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        body {
            text-align: center;
        }
        h2 {
            margin-top: 50px;
        }
    </style>

</head>

<body>   
    <div class="header">
        <div>
            <img src="img/Icono_Logo.png" alt="Logo" class="logo" />
        </div>
        <article class="ef_typing">
           RESERVAS...
        </article>       
        
        <div class="social-menu-slider">
            <a href="https://www.facebook.com/profile.php?viewas=100000686899395&id=61552363406946" class="btn btn-custom"><img src="assets/facebook-icon.svg"/></a>
            <a href="#" class="btn btn-custom"><img src="assets/twitter-icon.svg"/></a>
            <a href="https://www.instagram.com/sabor_secreto_peru/" class="btn btn-custom"><img src="assets/instagram-icon.svg"/></a>
            <a href="#" class="btn btn-custom"><img src="assets/youtube-icon.svg"/></a>
        </div>
        <div class="menu-slider">
            <a href="index.html" class="btn btn-outline-custom">Inicio</a>
            <a href="qsomos.php" class="btn btn-outline-custom">Quienes Somos</a>
            <a href="op_reservas.php" class="btn btn-outline-custom">Reservas</a>
            <a href="contact.php" class="btn btn-outline-custom">Contactenos</a>
        </div>
    </div>
    <!------------------------ PLANTILLA ---------------------------------->

    <div class="fondo-blanco-transparente">
    <div class="cuadradoblanco">
    
    <?php
    if (isset($_GET['nombres'])) {
        $nombres = $_GET['nombres'];
        
        echo "<h2>REGISTRO EXITOSO</h2>";
        echo "<p>Te damos la bienvenida a nuestra familia de SABOR SECRETO</p>";
        echo "<h1> $nombres</h1>";
    }
    ?>

    <img src="/Vista/assets/confirmar.svg" alt="Bienvenido">
    <p>Esperamos verte en nuestro local como también esperamos atenderte con nuestro delivery.</p>
    <p>Ahora puedes navegar y hacer tu pedido o reserva como cliente registrado en nuestro sistema.</p>
    </div>

    </div>
    <!------------------------ FIN PLANTILLA ---------------------------------->
    <div class="copyright-bar">
        <p>&copy; 2023 Sabor Secreto. Todos los derechos reservados.</p>
    </div>   


</body>
</html>