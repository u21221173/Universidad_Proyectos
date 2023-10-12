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
        form {
            display: inline-block;
            text-align: left;
        }
        label {
            display: block;
            margin: 10px 0;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #FF5733;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #FF2E00;
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
    <form action="/Controlador/controlador_registro.php" method="post">
        <h2>Registro de Cliente</h2>
        <h3>Ingrese sus datos personales</h3>
        <label>Nombres:</label>
        <input type="text" name="nombres" required>
        <label>Apellidos:</label>
        <input type="text" name="apellidos" required>
        <label>Ingrese DNI:</label>
        <input type="text" name="dni" required>
        <label>Dirección:</label>
        <input type="text" name="direccion" required>
        <label>Correo:</label>
        <input type="email" name="correo" required>
        <label>Celular:</label>
        <input type="text" name="celular" required>
        
        <h3>Ingrese sus datos de Boleta/Factura</h3>
        <label>RUC:</label>
        <input type="text" name="ruc">
        <label>Razón Social:</label>
        <input type="text" name="razon_social">
        <label>Dirección Fiscal:</label>
        <input type="text" name="direccion_fiscal">

        <input type="submit" value="Registrar">
    </form>

    </div>



    <!------------------------ FIN PLANTILLA ---------------------------------->
    <div class="copyright-bar">
        <p>&copy; 2023 Sabor Secreto. Todos los derechos reservados.</p>
    </div>   

</body>
</html>