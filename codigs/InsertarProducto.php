<?php

include 'Conexion.php';

$url_img = $_POST['Url_imagen'];
$nombre_producto = $_POST['NombreVideojuego'];
$descripcion = $_POST['Descripcion'];


// Verifica si el producto ya existe
$verificar_producto = mysqli_query($mysqli, "SELECT * FROM AgregacionProducto WHERE NombreVideojuego='$nombre_producto'");
if (mysqli_num_rows($verificar_producto) > 0) {
    echo '
        <script>
            alert("Este producto ya fue ingresado anteriormente");
            window.location = "../Viws/InterfazAdmin.php";
        </script>';
    mysqli_close($mysqli);
    exit();
};

$registroprod = $mysqli->prepare("INSERT INTO AgregacionProducto (Url_imagen, NombreVideojuego, Descripcion) VALUES (?, ?, ?)");
$registroprod->bind_param("sss", $url_img, $nombre_producto, $descripcion);
$registroprod->execute();

if ($registroprod->affected_rows > 0) {
    echo '
        <script>
            alert("Producto ingresado exitosamente");
            window.location = "../Viws/InterfazAdmin.php";
        </script>';
} else {
    echo '
        <script>
            alert("Ha ocurrido un error, por favor inténtelo nuevamente");
            window.location = "../Viws/InterfazAdmin.php";
        </script>';
};

$registroprod->close();
mysqli_close($mysqli);

    
?>