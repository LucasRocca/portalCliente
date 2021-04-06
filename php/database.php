<?php
    $mysqli = new mysqli("localhost", "root","","portaldb");

    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else
        //echo "conexion establecida";
?>
