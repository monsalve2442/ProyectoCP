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
    <title>Multivers Of Game</title>
    <link rel="shortcut icon" href="../imagen2.png">
    <link rel="stylesheet" href="../styles/AcercaDe.css">
</head>
<body>
    <h1>A</h1>
</body>
</html>