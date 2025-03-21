<?php
// Verifica si hay un parámetro de éxito en la URL
$exito = isset($_GET['exito']) ? $_GET['exito'] : 0;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Benditos Tacones</title>
    <link rel="stylesheet" href="css/contacto.css">

    <link rel="shortcut icon" href="img/iconbox.png" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <header>
        <div>
            <a href="inicio.html"> <img id="logo" src="img/tacinew (1).png" alt="Logo del restaurante"></a>
            <!-- Reemplaza 'ruta_del_logo.jpg' con la ruta correcta de tu logo -->
        </div>
        <nav id="main-nav">
            <button id="toggle-menu">☰</button>
            <a href="carta.html">CARTA</a>
            <a href="dondeestamos.html">DÓNDE ESTAMOS</a>
            <!--  <a href="unete.html">ÚNETE</a>-->
            <a href="contacto.html">CONTACTO</a>
        </nav>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var toggleButton = document.getElementById('toggle-menu');
                var mainNav = document.getElementById('main-nav');

                toggleButton.addEventListener('click', function () {
                    mainNav.classList.toggle('show-nav');
                });
            });
        </script>
    </header>

    <section style="background: url('img/portada\ -\ contacto.JPG') center/cover no-repeat;  filter: brightness(100%) contrast(80%); background-size:1690px; 
    background-position: center;">
        <div id="textoprincipal">
            <h1 style="color: white; mix-blend-mode:luminosity">
                <span class="destacado">T</span>E ESTAMOS ESPERANDO

            </h1>
        </div>
    </section>


    <!--
    <div id="cookie-banner" class=" ">
        <p>Este sitio web utiliza cookies. Al continuar navegando, aceptas nuestro uso de cookies.</p>
        <button id="accept-cookies">ACEPTAR</button>
    </div>

    <script src="script.js"></script>
-->


    <div class="container">
        <div class="left-column">
            <div class="title">NUESTRA MOTIVACIÓN
            </div>
            <div class="text">
                <p> Urban Poke nace por el deseo de incorporar la
                    diversidad de culturas, ideas y estilos de vida que
                    encontramos en las ciudades dentro de un bowl. La
                    revolución urbana basada en Healthy Fast Food
                    llegará pronto a tu ciudad basada en valores como:
                    integración, diversidad de culturas, calidad de
                    nuestros productos, y excelencia en la atención
                    rápida.
                </p>
                <p>
                    Urban Poke nace por el deseo de incorporar la
                    diversidad de culturas, ideas y estilos de vida que
                    encontramos en las ciudades dentro de un bowl. La
                    revolución urbana basada en Healthy Fast Food
                    llegará pronto a tu ciudad basada en valores como:
                    integración, diversidad de culturas, calidad de
                    nuestros productos, y excelencia en la atención
                    rápida.</p>
            </div>
            <div class="subtitle">QUÉ NADIE TE PARE...</div>


        </div>
      
      <?php
        // Si hay éxito, muestra un mensaje de agradecimiento
        if ($exito == 1) {
            echo '<div class="exito-mensaje">¡El formulario se ha enviado correctamente! Gracias por tu mensaje.</div>';
        } elseif ($exito == 0) {
            echo '<div class="error-mensaje">Hubo un error al enviar el formulario. Por favor, inténtalo de nuevo más tarde.</div>';
        }
        ?>

        <div class="right-column">
            <div class="black-title">NO TE QUEDES CON DUDAS...</div>
            <form action="enviar_correo.php" method="post">
                <div>
                    <input type="text" name="nombre" class="input-box input-boxnombre" placeholder="Nombre">
                </div>
                <div>
                    <input type="text" name="apellido" class="input-box input-boxapellido" placeholder="Apellido">
                </div>
                <div>
                    <input type="text" name="email" class="input-box input-boxemail" placeholder="Email">
                </div>
                <div>
                    <input type="text" name="telefono" class="input-box input-boxtelefono" placeholder="Teléfono">
                </div>
                <div>
                    <input type="text" name="comentario" class="input-box input-boxcomentario"
                        placeholder="Comentario o mensaje">
                </div>
                <div class="aceptar-privacidad-container">
                    <input type="checkbox" class="aceptar-privacidad" id="aceptar-privacidad">
                    <label for="aceptar-privacidad">Acepto la política de privacidad y doy mi consentimiento para el
                        tratamiento de mis datos de acuerdo a la legalidad vigente.</label>
                </div>
                <button type="submit" class="button">ENVIAR</button>
            </form>



            <script>
                function cambiarColorFondo() {
                    var button = document.querySelector('.button');
                    button.style.backgroundColor = 'green'; // Cambia el color de fondo al hacer clic
                }
            </script>


        </div>
    </div>



    <footer class="footer">
        <div class="logo">
            <!-- Logo del restaurante -->
            <img src="img/logotaco.png" alt="Logo del restaurante">
        </div>
        <div class="info">
            <h4>MÁS INFORMACIÓN</h4>
            <ul>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="avisolegal.html">Aviso Legal</a></li>
                <li><a href="politicaprivacidad.html">Política de Privacidad</a></li>
                <li><a href="#">Otros enlaces</a></li>
            </ul>
        </div>
        <div class="novedades">
            <h4>RECIBE LAS NOVEDADES</h4>
            <a href="unete.html"> <button class="boton-rojo">SUSCRIBIRSE</button></a>
            <a href="dondeestamos.html"> <button class="boton-blanco">PIDE TU TACÓN</button></a>
        </div>
        <div class="redes">
            <h4>SÍGUENOS EN REDES</h4>
            <a href="https://www.instagram.com/benditostacones_/" target="_blank"><img src="img/instagr.png"
                    alt="Instagram"></a>
            <a href="https://www.linkedin.com/" target="_blank"><img src="img/liked.png" alt="LinkedIn"></a>
            <a href="https://www.tiktok.com/" target="_blank"><img src="img/tiktokas.png" alt="TikTok"></a>
        </div>
    </footer>
</body>

</html>