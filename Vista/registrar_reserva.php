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
        <div class="fondo-blanco-transparente">
            <div class="TituloCentrado">
            <?php
                if (isset($_GET['menu'])) {
                    $menu = $_GET['menu'];
                    echo "<h2 style='font-weight: bold; text-align: center; margin: 20px 0; color: #333;'>$menu</h2>";
                } else {
                    echo "No se ha seleccionado ningún menú.";
                }
                ?>
            </div>

            <form action="/Controlador/ReservasController.php" method="POST">
            <input type="hidden" name="nom_menu" value="<?php echo $menu; ?>">
                <div class="cuadradoblanco">
                        <div class="TituloCentrado">
                            <p>Seleccione cantidad de personas:</p>
                        </div>
                        <div class="cantidad-personas">
                            <?php
                            // Ciclo para generar los botones de cantidad de personas
                            for ($i = 1; $i <= 8; $i++) {
                                echo "<label><input type='radio' name='cantidad_personas' value='$i'>$i</label>";
                            }
                            ?>
                        </div>     
                
                        <div class="TituloCentrado">
                            <p>Seleccione la fecha:</p>
                        </div>
                        <input type="date" name="fecha" required min="<?= date('Y-m-d'); ?>">
                        <br>

                        <br>
                        <div class="TituloCentrado">
                            <p>Seleccione la hora:</p>
                        </div>
                        <input type="time" name="hora" required>
                </div>

            <br>

                <!-- Formulario para seleccionar método de pago -->
                <div class="cuadradoblanco">
                <div class="TituloCentrado">
                    <p>Seleccione método de pago:</p>
                </div>
                <label>
                    <input type="radio" name="medio_pago" value="Visa/MasterCard"> 
                    <img src="assets/visa.svg" alt="Icono1">
                    <img src="assets/mastercard.svg" alt="Icono2">
                    Pago con Visa o MasterCard
                    <p>Usa esta opción...</p>
                </label>
                <br>
                <label>
                    <input type="radio" name="medio_pago" value="YAPE">
                    <img src="img/yape.png" alt="Icono3" width="40px" height="40px">
                    Pago con YAPE
                    <p>Usa esta opción...</p>
                </label>
                <br>
                <label>
                    <input type="radio" name="medio_pago" value="Efectivo">
                    <img src="/Vista/assets/efectivo.svg" alt="Icono4">
                    Pago con efectivo
                    <p>Usa esta opción...</p>
                </label>
            </div>
            <br>
            <!-- Formulario para detalles de la compra -->
            <div class="cuadradoblanco" >
                <div class="TituloCentrado">
                    <p>Seleccione tipo de comprobante:</p>
                </div>
                <select name="tipo_comprobante" required>
                    <option value="">Seleccione...</option>
                    <option value="Boleta">BOLETA</option>
                    <option value="Factura">FACTURA</option>
                </select>
                <br>
                <label>
                    Nro DNI/RUC:
                    <input type="text" name="ruc_dni" required>
                </label>
                <br>
                <label>
                    Nombres / Razon Social:
                    <input type="text" name="razon_social" required>
                </label>
                <br>
                <label>
                    Dirección:
                    <input type="text" name="direccion" required>
                </label>
            </div>
            
            <!-- Botón para continuar -->
            <div class="TituloCentrado">
                <input type="submit" value=" < Continuar!">
            </div>
            </form>
        </div>
            <!------------------------ FIN PLANTILLA ---------------------------------->
            <div class="copyright-bar">
                <p>&copy; 2023 Sabor Secreto. Todos los derechos reservados.</p>
            </div>   
    </body>
</html>