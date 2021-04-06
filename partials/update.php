<?php 
    include '../php/database.php';
    
    $id = ($_GET['id_user']);

    $consulta = "SELECT * FROM usuarios WHERE id_user = $id LIMIT 1";
    $resultado = mysqli_query($mysqli, $consulta);

    $row = $resultado->fetch_assoc();
?>
<?php include '../partials/nav.php'?>

<!-- Coneccion a bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="../css/Login.css"> 

<div class="modal-dialog text-center" > 
            <div class="col-sm-8 main-section"> 
                <div class="modal-content">
                   <form class="col-12" method="POST" action="../partials/update2.php" >
                       <div class="form-group" id="user-group">
                           <input type="text" class="from.control" name="nombre" value="<?php echo $row['nombre'] ?>" placeholder="Nombre y Apellido" required>
                           <input type="hidden" id="id" name="id_user" value="<?php echo $row['id_user'] ?>"> 
                       </div>
                       <div class="form-group" id="user-group">
                           <input type="num" class="from.control" name="dni" value="<?php echo $row['dni'] ?>" placeholder="DNI"  required>
                           <input type="hidden" name="rol" value="Cliente" >
                       </div>
                       <div class="form-group" id="user-group">
                           <input type="email" class="from.control" name="email" value="<?php echo $row['email'] ?>" placeholder="Email"  required>
                       </div>
                       <div class="form-group" id="contrasena-group">
                        <input type="password" class="from.control" name="password" value="<?php echo $row['password'] ?>" placeholder="Contraseña"  required>
                       </div>
                       <div class="form-group" id="contrasena-group">
                        <input type="password" class="from.control" name="confirm_password" value="<?php echo $row['confirm_password'] ?>" placeholder="Confirmar contraseña" required>
                       </div>
                       <br>
                       <div> 
                        <button type="submit" name="update" class="btn btn-primary" onClick="comprobarClave()"> Actualizar </button>
                       </div>
                   </form>
                </div>
            </div>
        </div>

