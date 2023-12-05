<?php
session_start();

// Comprobar si la sesión está activa
if (isset($_SESSION['Correo'])) {
    $correo = $_SESSION['Correo'];
    $autenticado = true;
} else {
    $correo = null;
    $autenticado = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap" rel="stylesheet">
    <title>Multivers Of Game</title>
    <link rel="stylesheet" href="../styles/Interfaz.css">
    <link rel="shortcut icon" href="../imagen2.png">
</head>
<body>
    <div class="menu">
        <div>
            <a href="AcercaDe.php"><b>Acerca de</b></a>
            <a href="MasEsperados.php"><b>Mas Esperados</b></a>
            <a href="Contacto.php"><b>Contacto</b></a>
        </div>
        <div class="button-container">
        <?php
           if ($autenticado) {
               // Si el usuario está autenticado, muestra el botón de "Cerrar Sesión"
               echo '<a href="../codigs/CerrarSesion.php"><button class="button"><b>Cerrar Sesión</b></button></a>';
           } else {
               // Si el usuario no está autenticado, muestra el botón de "Registrarme" e "Iniciar Sesión"
               echo '<a href="Registro.php"><button class="button"><b>Registrarme</b></button></a>';
               echo '<a href="InicioSesion.php"><button class="button"><b>Iniciar Sesión</b></button></a>';
           }
           ?>
        </div>
    </div>
    <div class="ImgPrincipal">
        <img  src="../imagen2.png" alt="">
    </div>
    
    <h1 id="NombrePagina"><b>Multivers Of Game</b></h1>
    

    <div class="content">
        <br>
        <p><b>Explora el apasionante mundo de los videojuegos en Nombre de tu Sitio Web. Sumérgete en un universo donde la diversión, la estrategia y la emoción se fusionan para crear experiencias inolvidables. clásicos atemporales hasta las últimas novedades, estamos aquí para llevarte a un viaje a través de los juegos.</b></p>
        <br>
        <p><b>En Nombre de tu Sitio Web, encontrarás:</b></p>
        <p><b>Reseñas y análisis imparciales de videojuegos.</b></p>
        <p><b>Noticias y actualizaciones sobre la industria de los videojuegos.</b></p>
        <p><b>Comunidad apasionada de jugadores con la que puedes compartir tus experiencias.</b></p>
        <br>
        <p><b>No importa si eres un jugador casual o un fanático inquebrantable, Nombre de tu Sitio Web tiene algo para todos. Únete a nosotros mientras exploramos este emocionante universo virtual y descubrimos juntos los secretos, desafíos y tesoros que los videojuegos tienen para ofrecer.</b></p>
        <br>
        <p><b>¡Prepárate para jugar y descubrir!</b></p>
    </div>

    <br>

    <footer>
        <div class="footer-row">
            <div class="footer-column">
                <p>Kevin Espinosa Londoño</p>
            </div>
            <div class="footer-column">
                <p>Simon Monsalve Higuita</p>
            </div>
            <div class="footer-column">
                <p>Santiago Buritica Hoyos</p>
            </div>
        </div>
        <div class="footer-row">
            <div class="footer-column">
                <p>+57 301 345 9570</p>
            </div>
            <div class="footer-column">
                <p>+57 311 206 5285</p>
            </div>
            <div class="footer-column">
                <p>+57 314 600 6554</p>
            </div>
        </div>
        <div class="footer-row">
            <div class="footer-column">
                <p>kelesp1015@gmail.com</p>
            </div>
            <div class="footer-column">
                <p>monsalvesimon2442@gmail.com</p>
            </div>
            <div class="footer-column">
                <p>santiagoburitica49@gmail.com</p>
            </div>
        </div>
    </footer>

    <script>
        window.onload = function () {
            var boton1 = document.getElementById("boton1");
            var boton2 = document.getElementById("boton2");
            var boton3 = document.getElementById("boton3"); // Asegúrate de que el botón 3 tenga el ID "boton3"

            // Verificar si el botón 3 existe en la página
            if (boton3) {
                // Si el botón 3 existe, ocultar botón 1 y 2
                boton1.style.display = "none";
                boton2.style.display = "none";
            }
        };
    </script>
</body>
</html>