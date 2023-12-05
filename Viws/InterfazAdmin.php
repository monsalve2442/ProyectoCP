<?php
session_start();

// Comprobar si la sesión está activa
if (isset($_SESSION['Correo'])) {
    $correo = $_SESSION['Correo'];
} else {
    $correo = null;
}

require '../Codigs/Conexion.php';

$where = "";

if (!empty($_POST)) {
    $valor = $_POST['campo'];
    if (!empty($valor)) {
        $where = "WHERE Correo LIKE '%$valor'";
    }
}

// Cantidad de resultados por página
$resultados_por_pagina = 24;

// Página actual
if (isset($_GET['page'])) {
    $pagina = $_GET['page'];
} else {
    $pagina = 1;
}

// Calcular el número de usuarios totales
$sql = "SELECT COUNT(*) as total FROM Usuario $where";
$total_resultados = $mysqli->query($sql)->fetch_assoc()['total'];

// Calcular el número de páginas
$total_paginas = ceil($total_resultados / $resultados_por_pagina);

// Calcular el índice del primer resultado de esta página
$indice_inicial = ($pagina - 1) * $resultados_por_pagina;

// Consulta para obtener los usuarios de la página actual
$sql = "SELECT * FROM Usuario $where LIMIT $indice_inicial, $resultados_por_pagina";
$resultado = $mysqli->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/InterfazAdmin.css">
</head>
<body>
    <div id="BarraOpciones">
        <a class="OpcionesBarra" href="#RegistroUsuarios">Registros</a>
        <a class="OpcionesBarra" href="#Implemento">Agregar Producto</a>
        <a class="OpcionesBarra" href="Interfaz.php">Salir</a>
    </div>

    <h1 class="TextWhite" id="Implemento">Agregar Producto</h1>
    
    <form action="../codigs/InsertarProducto.php" method="Post">
        <div id="campAgregacionProd">
            <div id="SubirImagen">
                <input  type="text" id="InpImg" name="Url_imagen" placeholder="Ingresar URL de la imagen">
            </div>
            <h3 class="TextWhite">Ingrese nombre del videojuego</h3>
            <input type="text" class="InpCuadro" name="NombreVideojuego" placeholder="Nombre videojuego">
            <h3 class="TextWhite">Ingrese la descripción</h3>
            <input type="text" autocomplete="off" id="InpCuadroD" name="Descripcion" placeholder="Ingrese descripción">
            <br>
            <button id="BtnAgregar">Agregar</button>
        </div>
    </form>

    <br></br>
    <div class="Separacion"><h1 id="RegistroUsuarios" class="TextWhite">Registro</h1></div>
    <br></br>

    <div id="TblRegistro">
        <table  class="table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre(s)</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Telefono</th>
                    <th>ID Rol</th>
                    <th>Acciones</th> 
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $row['id_Usuario']; ?></td>
                        <td><?php echo $row['Nombre']; ?></td>
                        <td><?php echo $row['Correo']; ?></td>
                        <td><?php echo $row['Clave']; ?></td>
                        <td><?php echo $row['Telefono']; ?></td>
                        <td><?php echo $row['id_Rol']; ?></td>
                        <td><a href="../codigs/Eliminar.php" class="btn btn-primary">Editar</a></td>
                        <td><a href="../codigs/Eliminar.php?id=<?php echo $row['id_Usuario']?>" class="btn btn-danger">Delite</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>