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
           CONTÁCTENOS...
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
    <div class="container mt-5">
        
        <form action="/Controlador/procesar_formulario.php" method="post">
            <div class="form-group">
                <label for="nombre_apellidos">Nombre y Apellidos:</label>
                <input type="text" class="form-control" id="nombre_apellidos" name="nombre_apellidos" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    </div>

    <!------------------------ FIN PLANTILLA ---------------------------------->
    <div class="copyright-bar">
        <p>&copy; 2023 Sabor Secreto. Todos los derechos reservados.</p>
    </div>   

</body>
</html>