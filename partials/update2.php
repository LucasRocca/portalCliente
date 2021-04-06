<?php
include '../php/database.php';
if(isset($_POST['update'])){

    $id = $_POST['id_user'];
    $nombre = $_POST['nombre'];
    $dni = $_POST[ 'dni'];
    $rol = $_POST['rol'];
    $email = $_POST[ 'email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $consulta = "UPDATE usuarios set id_user = '$id', nombre = '$nombre', dni = '$dni', email = '$email', rol = '$rol',  
            password = '$password',  confirm_password = '$confirm_password' WHERE id_user = $id";
    $resultado = mysqli_query($mysqli, $consulta);
    echo $resultado;

    if (!$resultado){
        die("no se pudo modificar el registro");
    }else{
        echo'<script type="text/javascript">
        alert("Registro modificado correctamente");
        window.location.href="../php/Clientes.php";
        </script>';
    }
}
?>