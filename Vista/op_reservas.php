<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor Secreto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="/Vista/modal.js"></script>
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
    <div class="image-section">
        <div class="image-wrapper">            
            <a href="#" id="abrirPopup"><img src="img/aprobado.png" alt="Reserva"></a>
        </div>
        <div class="image-wrapper">
            <a href="registrar_cliente.php"><img src="img/cancel.png" alt="Cancelar"></a>
        </div>
    </div>
    </div>

    <div class="popup" id="miPopup">
        <div class="popup-contenido">
            <p>Eres cliente registrado?</p>
            <button onclick="redirigir('validar_usuario.php')">SI</button>
            <button onclick="redirigir('registrar_cliente.php')">NO</button>
            <span class="cerrar-popup" id="cerrarPopup">&times;</span>
        </div>
    </div>





    <!------------------------ FIN PLANTILLA ---------------------------------->
    <div class="copyright-bar">
        <p>&copy; 2023 Sabor Secreto. Todos los derechos reservados.</p>
    </div>   
    <script src="/Vista/modal.js"></script>
</body>
</html>