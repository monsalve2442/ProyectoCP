<?php
include 'conexion.php';

$Usuario = $_POST['Nombre'];
$correo = $_POST['Correo'];
$contraseña = $_POST['Clave'];
$telefono = $_POST['Telefono']; 

$id_Rol = 2;

// Verificar si el correo ya está registrado
$verificar_correo = mysqli_query($mysqli, "SELECT * FROM Usuario WHERE Correo='$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya está registrado, intenta con otro distinto");
            window.location = "../Viws/Registro.php";
        </script>';
    mysqli_close($mysqli);
    exit();
}

$registro = $mysqli->prepare("INSERT INTO Usuario (Nombre, correo, clave, Telefono, id_Rol) VALUES (?, ?, ?, ?, ?)");
$registro->bind_param("sssii", $Usuario, $correo, $contraseña, $telefono, $id_Rol);
$registro->execute();

if ($registro->affected_rows > 0) {
    echo '
        <script>
            alert("Usuario registrado exitosamente, Inicia Sesión para ingresar a la página");
            window.location = "../Viws/InicioSesion.php";
        </script>';
} else {
    echo '
        <script>
            alert("Ha ocurrido un error, por favor inténtelo nuevamente");
            window.location = "../Viws/Registro.php";
        </script>';
}

$registro->close();
mysqli_close($mysqli);
?>