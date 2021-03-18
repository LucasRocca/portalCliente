<?php /*
    session_start(); 
    require 'database.php';

    if (isset($_SESSION['id_user'])) {
        $records = $connection->prepare('SELECT id, email, password FROM usuarios WHERE id= :id');
        $records->bindParam(':id', $_SESSION['id_user']); 
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        if(count($results) > 0){
            $user = $results;
        }
    } */
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Coneccion a bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/Index.css"> 
    <link rel="stylesheet" type="text/css" href="../css/normalize.css"> 


    <title>Portal Cliente</title>

</head>
<body>
    <header> 
        <!-- en el header deberia crear la carpeta partials/header para tener siempre el mismo nav sin copiar codigo -->
            <nav class="nav bg-dark">
                <div>
                    <a class="navbar-brand" href="../css/Index.php">
                        <img src="../Imagenes/Logos/loading.png" alt="LOADING" id="logoLoading">
                    </a>
                </div>
                <div>
                    <ul class="nav justify-content">
                        <li class="nav-item">
                        <a class="nav-link active" href="../php/LineaNueva.php">Linea nueva</a>
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
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Politica de Privacidad</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Clientes</a>
                        </li>
                    </ul>
                </div>
            </nav>  
    </header>
    <section> 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../Imagenes/carrousel/comunicacionesSenales.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../Imagenes/carrousel/nube.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../Imagenes/carrousel/tactil.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>
    <section class="parrafo">
        <div>
            <p class="lead">
                <b>SOMOS LOADING </b><br>
                <i>LOADING</i> es una empresa de soluciones de conectividad y entretenimiento con más de 20.000 colaboradores en todo el país. 
                Transformamos la experiencia digital de nuestros clientes ofreciéndoles un servicio seguro, flexible y dinámico en todos sus dispositivos, 
                con conexiones fijas y móviles de alta velocidad, y una plataforma de contenidos en vivo y a demanda que integra series, películas, gaming, 
                música y programas de TV. Trabajamos con las marcas comerciales Personal, Fibertel, Flow y Telecom | Fibercorp, brindamos servicios de telefonía 
                fija y móvil, transmisión de datos, televisión paga e Internet, para individuos, empresas e instituciones en todo el país. 
            </p>
        </div>
        <div>
            <p class="lead">
                <b>SUSTENTABILIDAD</b> <br>
                Sostenemos el compromiso cotidiano de contribuir al desarrollo social, cultural y económico del país, promoviendo el avance tecnológico y fomentando la innovación social.

                De la mano de la evolución de los servicios TIC y la conectividad apostamos a un crecimiento sustentable, que incentive el valor social y ambiental de la tecnología.

                Desplegamos una estrategia de sustentabilidad que busca acortar la brecha digital y promover la integración de la población a lo largo de todo el territorio, 
                conscientes del enorme potencial de la conectividad en la educación, formación laboral e inclusión social,

                Creamos soluciones innovadoras, que fomentan un impacto transformador para personas y comunidades, contribuir a la protección del entorno, e impulsar una mejor calidad de vida de las personas.
            </p>
        </div>
    </section>
    <footer>
        <div> 
            <p>
                Los servicios que presta LOADING están sujetos a disponibilidad técnica y geográfica  <br>
                Todos los derechos reservados - DIRECCION: Av. San Martin 3569 - Republica Argentina
            </p>
        </div>
    </footer>

</body>
<!-- conectar a Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>