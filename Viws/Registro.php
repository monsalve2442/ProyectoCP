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
    <link rel="stylesheet" href="../styles/Registro.css">
    <title>Multivers Of Game</title>
    <link rel="shortcut icon" href="../imagen2.png">
</head>
<body>
    
    <a href="Interfaz.php" class="back-button">Anterior</a>

    <div class="container">
        <h3>Registro de Usuario</h3>
        <form action="../codigs/InsertarRegistro.php" method="POST">
                    
            <label for="nombre">Nombre</label>
            <input type="text" name="Nombre" placeholder="Tu nombre">
            
            <label for="email">Correo Electrónico</label>
            <input type="email" name="Correo" placeholder="Correo electrónico">

            <label for="password">Contraseña</label>
            <input type="password" name="Clave" placeholder="Contraseña">

            <label for="telefono">Teléfono</label>
            <input type="tel" name="Telefono" placeholder="Número de teléfono">

            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>