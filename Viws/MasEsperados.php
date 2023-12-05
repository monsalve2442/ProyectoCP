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
    <link rel="stylesheet" href="../styles/Top.css">
</head>
<body>
    
    <a href="Interfaz.php" id="backButton" class="back-button">Anterior</a>

    <h1 id="MasJugados">Mas Jugados</h1>
    <div class="Centrar">
        
        <section>
            <img src="../ImagenesTop/90313_26_report-call-of-duty-2023-will-be-full-game-with-campaign.png" alt="ImagenCallOfDuty">
            <img src="../ImagenesTop/ea-sports-fc-24-todo-sabemos-sucesor-fifa-24-3084248.png" alt="ImagenFc24">
            <img src="../ImagenesTop/eurogamer-zjp1vx.png" alt="ImagenGTA5">
            <img src="../ImagenesTop/ArkSurvivalEvolved.png" alt="ImagenArk">
            <img src="../ImagenesTop/minecraft-2575225.png"alt="ImagenMinecraft">
        </section>
    </div>
    
</body>
</html>