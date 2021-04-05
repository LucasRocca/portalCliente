<?php 
    include '../php/database.php';

    if (isset($_GET['id_user'])){
        $id = $_GET['id_user'];
        $consulta = "SELECT * FROM usuarios WHERE id_user = $id";
        $resultado = mysqli_query($mysqli, $consulta);

        if(isset($_POST['update'])){

            $nombre = $_POST['nombre'];
            $dni = $_POST[ 'dni'];
            $rol = $_POST['rol'];
            $email = $_POST[ 'email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
    
            $consulta = "UPDATE usuarios set id_user = '$id', nombre = '$nombre', dni = '$dni', email = '$email', rol = '$rol',  password = '$password',  confirm_password = '$confirm_password' WHERE id_user = $id";
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
    }
    
?>
<?php include '../partials/nav.php'?>

<!-- Coneccion a bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="../css/Login.css"> 

<div class="modal-dialog text-center" > 
            <div class="col-sm-8 main-section"> 
                <div class="modal-content">
                   <form class="col-12" method="POST" action="../partials/update.php?$id=<?php echo $_GET['id_user']; ?>" >
                       <div class="form-group" id="user-group">
                           <input type="text" class="from.control" name="nombre" placeholder="Nombre y Apellido" required>
                       </div>
                       <div class="form-group" id="user-group">
                           <input type="num" class="from.control" name="dni" placeholder="DNI"  required>
                       </div>
                       <div class="form-group disabled" id="user-group">
                           <input type="text" class="from.control" name="rol" value="Cliente"  required>
                       </div>
                       <div class="form-group" id="user-group">
                           <input type="email" class="from.control" name="email" placeholder="Email"  required>
                       </div>
                       <div class="form-group" id="contrasena-group">
                        <input type="password" class="from.control" name="password" placeholder="Contraseña"  required>
                       </div>
                       <div class="form-group" id="contrasena-group">
                        <input type="password" class="from.control" name="confirm_password" placeholder="Confirmar contraseña" required>
                       </div>
                       <br>
                       <div> 
                        <button type="submit" name="update" class="btn btn-primary" onClick="comprobarClave()"> Actualizar </button>
                       </div>
                   </form>
                </div>
            </div>
        </div>

