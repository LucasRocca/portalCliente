

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
    <header> 
        <nav class="navbar bg-dark" style="opacity: .85;">
            <div>
                <a class="navbar-brand" href="../php/Index.php">
                  <img src="../Imagenes/Logos/loading.png" alt="LOADING" id="logoLoading">
                </a>
            </div>
            <div>
                <!-- del boton de registrarse me direcciona a la pagina registro.php -->
                <form>
                    <a href="../php/Index.php">
                        <button class="btn btn-sm btn-outline-success" type="button" id="btnRegistrarse">Volver</button>
                    </a>
                </form>
            </div>
        </nav>
    </header>
    <section> 
    <h1>Ingrese sus datos para REGISTRARSE</h1>
        <div class="modal-dialog text-center" > 
            <div class="col-sm-8 main-section"> 
                <div class="modal-content">
                   <form class="col-12" action="../partials/insert.php" method="POST" name="registrar" >
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
                        <button type="submit" name="btnRegistro" class="btn btn-primary" onClick="comprobarClave()"> Registrarse </button>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </section>
    <!-- <script type="text/javascript">

function comprobarClave(){

    clave1 = document.getElementById('pass')
    clave2 = document.getElementById('confirm_pass')

    if (clave1 == clave2){
        alert('Usuario creado correctamente');
    }else{
        alert("Error: las contraseñas no coinciden \n");
    }
}
</script> -->
</body>
<!-- conectar a Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>