<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'portaldb';

echo "estamos en la cadena de conexion a la bd";

try {
    $connection = new PDO("mysql:host=$server; dbname=$database;",$username,$password);
    echo "se establecio la conexion a la base de datos";
} catch (PDOException $e) {
    die('connected failed: '.$e->getMessage());
}
?>