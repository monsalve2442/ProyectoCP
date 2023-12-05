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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap" rel="stylesheet">
    <title>Multivers Of Game</title>
    <link rel="shortcut icon" href="../imagen2.png">
    <link rel="stylesheet" href="../styles/InicioSesion.css">
</head>
<body>
    <a href="Interfaz.php"  class="back-button">Anterior</a>
    
    <form action="../codigs/InicioSesion.php" method="post">
        <h3>Login Here</h3>

        <label for="username">Correo</label>
        <input type="text" placeholder= "Email or Phone" id="username" name="Correo">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="Clave">

        <button>Log In</button>
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>
</body>
</html>