<?php 
  require '../php/database.php';

    if(isset($_POST['btnRegistro'])){

        $nombre = $_POST['nombre'];
        $dni = $_POST[ 'dni'];
        $rol = $_POST['rol'];
        $email = $_POST[ 'email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $consulta = "INSERT INTO usuarios (nombre, dni, rol, email, password, confirm_password) 
        VALUES ('$nombre', '$dni', '$rol', '$email', '$password', '$confirm_password')";
        $resultado = mysqli_query($mysqli, $consulta);

        if (!$resultado) {
                echo'<script type="text/javascript">
                alert("fallo la conexion a la bd");
                window.location.href="../php/Registro.php";
                </script>';
                $consulta->close();
        }else{ 
                echo'<script type="text/javascript">
                alert("Usuario creado correctamente");
                window.location.href="../php/Principal.php";
                </script>';
        }
    }
?>