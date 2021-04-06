<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Coneccion a bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/Index.css"> 
    <link rel="stylesheet" type="text/css" href="../css/normalize.css"> 
  
    <title>Navegador</title>
</head>
<body>
<header> 
      <nav class="nav bg-dark">
            <div>
                <a class="navbar-brand" href="../php/Principal.php">
                  <img src="../Imagenes/Logos/loading.png" alt="LOADING" id="logoLoading">
                </a>
            </div>
            <div>
              <ul class="nav nav-tabs justify-content">
                  <li class="nav-item ">
                   <a class="nav-link" href="../php/LineaNueva.php">Linea nueva</a>
                  </li>
                  <li class="nav-item">
                   <a class="nav-link" href="../php/CambioPlan.php">Cambio de Plan</a>
                  </li>
                  <li class="nav-item">
                   <a class="nav-link" href="../php/BajaServicio.php">Baja de Servicio</a>
                  </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../php/Mudanza.php">Mudanza</a>
                   </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" aria-disabled="true">Politica de Privacidad</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="Clientes.php" tabindex="-1" aria-disabled="true">Clientes</a>
                  </li>
                   <a href="../php/Index.php" class="btn btn-sm btn-outline-success" type="submit" id="btnLogout">Cerrar sesion</a>
                </ul>
               
            </div>
      </nav>  
    </header>
</body>
  <!-- conectar a Jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>