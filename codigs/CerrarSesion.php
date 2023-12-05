<?php
session_start();

if (isset($_SESSION['Correo'])) {
    // Destruir la sesión actual para cerrar sesión
    session_destroy();

    // Redirigir a la página de inicio
    header("Location: ../Viws/Interfaz.php"); // Cambia "index.php" por la URL de tu página de inicio
    exit();
}
?>