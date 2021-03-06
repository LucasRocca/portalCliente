<?php
    session_start();
    require 'database.php';

    if(isset($_POST['btnIngresar'])){
        
        $email = $_POST[ 'email'];
        $password = $_POST['password'];

        $consulta = "SELECT email, password FROM usuarios WHERE email = '$email' and password= '$password'";
        $resultado = mysqli_query($mysqli, $consulta);
        $row = mysqli_fetch_array($resultado);

        $nombre=$row['nombre'];
        $cont=mysqli_num_rows($resultado);
        $id=$row['id_user'];

        //comparo la contrasena del form con la de la db
        if ($cont == 1) {
            $_SESSION['id_user']=$id;
            $_SESSION['nombre']=$nombre;
            header('Location:  /portalCliente/php/principal.php');
        }else{
            echo'<script type="text/javascript">
            alert("Los datos ingresados son incorrectos \nSi no se encuentra registrado presione en REGISTRARSE");
            window.location.href="../php/Index.php";
            </script>';
        }
    } 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Coneccion a bootstrap y CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Login.css"> 

    <title>Login</title>

</head>
<body>
    <header> 
        <nav class="navbar bg-dark" style="opacity: .85;">
            <div>
                <a class="navbar-brand" href="../php/Index.php">
                  <img src="../Imagenes/Logos/loading.png" alt="LOADING" id="logoLoading">
                </a>
            </div>
            <h1> ¡ BIENVENIDOS A LOADING ! </h1>
            <div>
                <!-- del boton de registrarse me direcciona a la pagina registro.php -->
                <form>
                    <a href="../php/Registro.php">
                        <button class="btn btn-sm btn-outline-success" type="button" id="btnRegistrarse">Registrarse</button>
                    </a>
                </form>
            </div>
        </nav>
    </header>
    <section>
        <div class="modal-dialog text-center"> 
            <div class="col-sm-8 main-section"> 
                <div class="modal-content">
                  <form class="col-12" action="../php/Index.php" method="POST">
                       <div class="form-group" id="user-group">
                           <input type="email" class="from.control"  name="email" placeholder="Email" id="usuario" required>
                       </div>
                       <div class="form-group" id="contrasena-group">
                        <input type="password" class="from.control"  name="password" placeholder="Contraseña" id="pass" required>
                       </div>
                       <button type="submit" name="btnIngresar" class="btn btn-primary"> Ingresar </button>
                   </form>
                   <br>
                   <div class="col-12">
                       <a href="" class="btnRecordarContrasena">Recordar contraseña</a> 
                   </div>
                </div>
            </div>
        </div>
    </section>
</body>
<!-- conecciones-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>

