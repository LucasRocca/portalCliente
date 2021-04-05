<?php
    //$server = 'localhost';
    //$username = 'root';
    //$password = '';
    //$database = 'portaldb';

    //$connection = new mysqli("mysql:host=$server; dbname=$database;",$username,$password);
    $mysqli = new mysqli("localhost", "root","","portaldb");

    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else
        echo "conexion establecida";
?>
