<?php
session_start(); // Iniciar la sesión

include 'Conexion.php'; // Incluir archivo de conexión a la base de datos

$correo = $_POST['Correo'];
$contraseña = $_POST['Clave'];

// Después de verificar la contraseña en insertar2.php
$consulta = $mysqli->prepare("SELECT id_Usuario, Clave, id_Rol FROM Usuario WHERE Correo = ?");
$consulta->bind_param("s", $correo);
$consulta->execute();
$consulta->bind_result($id_Usuario, $hashed_password, $id_Rol); // Cambia el nombre de la variable para evitar conflictos

if ($consulta->fetch() && $contraseña === $hashed_password) {
    // Inicio de sesión exitoso
    $_SESSION['Correo'] = $correo;
    $_SESSION['id_Rol'] = $id_Rol; // Almacena el id_rol del usuario en la sesión
    echo '
        <script>
            alert("Bienvenido a Multivers Of Game");
            window.location = "../Viws/Interfaz.php";
        </script>';
} else {
    // Inicio de sesión fallido
    echo "Usuario no encontrado o contraseña incorrecta";
}

$consulta->close();
?>