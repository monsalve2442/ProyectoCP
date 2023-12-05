<?php
    include ('Conexion.php');

    $id = $_GET['id'];
    $query = "DELETE FROM Usuario where (id_usuario = '$id')";
    $result = mysqli_query($mysqli,$query);
    if($query){
        header("../Viws/InterfazAdmin.php");
    }

?>