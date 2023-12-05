<?php

    session_start();

    $response = array('loggedIn' => false, 'Correo' => null);

    if (isset($_SESSION['Correo'])) {
        $response['loggedIn'] = true;
        $response['Correo'] = $_SESSION['Correo'];
    }

    header('Content-Type: application/json');
    echo json_encode($response);

?>