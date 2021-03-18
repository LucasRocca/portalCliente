<?php
    $server = 'localhost';
    $username = 'root';
    // como no tengo contraseña para la bd lo dejo en blanco
    $password = '';
    $database = 'portaldb';

try {
    $connection = new PDO("mysql:host=$server; dbname=$database;",$username,$password);
   // echo "se establecio la conexion a la base de datos";
} catch (PDOException $e) {
    die('connected failed: '.$e->getMessage());
}
?>