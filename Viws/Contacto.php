<?php
session_start();

// Comprobar si la sesión está activa
if (isset($_SESSION['Correo'])) {
    $correo = $_SESSION['Correo'];
} else {
    $correo = null;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/Contacto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap" rel="stylesheet">
    <title>Multivers Of Game</title>
    <link rel="shortcut icon" href="../imagen2.png">
</head>
<body>

    <a href="Interfaz.php" id="backButton" class="back-button">Anterior</a>
    
    <div class="NombrePagina">
        <h2 id="TextPagina">Multivers of Game</h2>
    </div>

    </h2>

    <div id="LogoP">
        <img src="../imagen2.png" alt="ImagenLogo">
    </div>
    <section class="agradecimiento">
        <div>
            <h2>¡Gracias por visitarnos!</h2>
            <p>Apreciamos tu interés en nuestro sitio web y en lo que hacemos. Si tienes alguna pregunta, comentario o sugerencia, no dudes en ponerte en contacto con nosotros. Estamos aquí para ayudarte y escucharte.</p>
        </div>
    </section>

    <header>
        <h1>Síguenos en Redes Sociales</h1>
    </header>

    <section class="social-links">
        <a href="https://www.facebook.com/TuPagina" target="_blank">
            <img src="../LogoFacebook.png" alt="Facebook">
        </a>

        <a href="https://www.instagram.com/TuPagina" target="_blank">
            <img src="../LogoInstagram.png" alt="Instagram">
        </a>
    </section>

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

    
</body>
</html>

