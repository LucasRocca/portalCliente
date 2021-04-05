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
                <?php include '../partials/nav.php' ?>

                <div>
                    <ul class="nav nav-tabs justify-content">
                        <li class="nav-item">
                            <a class="nav-link" href="Clientes.php" tabindex="-1" aria-disabled="true">Clientes</a>
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
    <?php 
        include "../partials/footer.php";
    ?>