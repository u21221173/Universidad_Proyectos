<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor Secreto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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

<!-- Sección de imágenes vegetarianas -->
<div class="fondo-blanco-transparente">

<?php
    if (isset($_GET['nombres'])) {
        $nombres = $_GET['nombres'];
        echo "<h2>Bienvenido(a): $nombres</h2>";
    }
?>
    

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                    <a href="registrar_reserva.php?menu=MENU VEGETARIANO 1">
                        <img src="/Vista/img/img_Menu/P01.jpg" class="card-img-top" alt="Menu Vegetariano 1">
                    </a>
                <div class="card-body">
                    <h5 class="card-title">MENU VEGETARIANO 1</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                    <a href="registrar_reserva.php?menu=MENU VEGETARIANO 2">
                        <img src="/Vista/img/img_Menu/P02.jpg" class="card-img-top" alt="Menu Vegetariano 2">
                    </a>
                <div class="card-body">
                    <h5 class="card-title">MENU VEGETARIANO 2</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                    <a href="registrar_reserva.php?menu=MENU VEGETARIANO 3">   
                        <img src="/Vista/img/img_Menu/P03.jpg" class="card-img-top" alt="Menu Vegetariano 3">
                    </a>
                <div class="card-body">
                    <h5 class="card-title">MENU VEGETARIANO 3</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                    <a href="registrar_reserva.php?menu=MENU TRADICIONAL 1">
                        <img src="/Vista/img/img_Menu/T01.jpg" class="card-img-top" alt="Menu Tradicional 1">
                    </a>
                <div class="card-body">
                    <h5 class="card-title">MENU TRADICIONAL 1</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                    <a href="registrar_reserva.php?menu=MENU TRADICIONAL 2">
                        <img src="/Vista/img/img_Menu/T02.jpg" class="card-img-top" alt="Menu Tradicional 2">
                    </a>
                <div class="card-body">
                    <h5 class="card-title">MENU TRADICIONAL 2</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                        <a href="registrar_reserva.php?menu=MENU TRADICIONAL 3">
                            <img src="/Vista/img/img_Menu/T03.jpg" class="card-img-top" alt="Menu Tradicional 3">
                        </a>
                <div class="card-body">
                    <h5 class="card-title">MENU TRADICIONAL 3</h5>
                </div>
            </div>
        </div>
    </div>
</div>

</div>




    <!------------------------ FIN PLANTILLA ---------------------------------->
    <div class="copyright-bar">
        <p>&copy; 2023 Sabor Secreto. Todos los derechos reservados.</p>
    </div>   

</body>
</html>