<?php 
    include '../php/database.php';

    if (isset($_GET['id_user'])){
        $id = $_GET['id_user'];
        $consulta = "DELETE FROM usuarios WHERE id_user = $id";
        $resultado = mysqli_query($mysqli, $consulta);

        if (!$resultado){
            die("fallo la consulta");
        }else{
            echo'<script type="text/javascript">
                alert("Registro eliminado correctamente");
                window.location.href="../php/Clientes.php";
                </script>';
        }
    }
?>