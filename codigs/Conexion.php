<?php

    $mysqli = new mysqli('localhost','root','','bd_simon');

    if($mysqli->connect_error){
        die('Eror en la conexion' . $mysqli->connect_error);
    }

?>