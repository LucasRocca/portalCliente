<?php
    require 'database.php';

    $message = '';

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
        // stament ejecuta el metodo "prepare"  que pasa la consulta SQL a la bd
        $stmt = $connection->prepare($sql);
        //vinculamos los parametros
        $stmt->bindParam(':email',$_POST['email']); 
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password); 

        if($stmt->execute()) {
            $message = 'Usuario creado correctamente' ;
        }
    }
?>

<?php if(!empty($message)): ?>
        <p> <?= $message ?>
        <?php endif; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Coneccion a bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Login.css"> 
 
    <title>Registro</title>

</head>
<body>

    <h1>Ingrese sus datos para REGISTRARSE</h1>
    <section> 
        <div class="modal-dialog text-center" > 
            <div class="col-sm-8 main-section"> 
                <div class="modal-content">

                   <form class="col-12" action="../php/Registro.php" href="../Login.php" method="POST">
                       <div class="form-group" id="user-group">
                           <input type="email" class="from.control" name="email" placeholder="Email" id="usuario" required>
                       </div>
                       <div class="form-group" id="contrasena-group">
                        <input type="password" class="from.control" name="password" placeholder="Contraseña" id="pass" required>
                       </div>
                       <div class="form-group" id="contrasena-group">
                        <input type="password" class="from.control" name="confirm_password" placeholder="Confirmar contraseña" id="confirm_pass" required>
                       </div>
                       <br>
                       <button type="submit" class="btn btn-primary"> Registrarse </button>
                   </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <a href="../php/Login.php">Volver</a>
    </footer>
</body>
</html>
<!-- conecciones-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
