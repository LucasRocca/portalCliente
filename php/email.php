
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
    <title>Document</title>
</head>
<body>
    <div class="form-wrap">
        <section class="mensaje-exito">
            <div"> 
                <h1 style="display: block; text-align: center; font-size: 35px; margin-bottom: 20px;">¡Mail enviado exitosamente!<h1> 
                <a href="../php/Principal.php" style="display: block; color: #aaf; padding: 10px 30px" > ACEPTAR </a>
            </div>
            <div>
            <?php   
                $nombre = $_POST['nombre'];
                $fechaNac = $_POST['fechaNac'];
                $CUIL= $_POST['CUIL'];
                $numCelular = $_POST['numCelular'];
                $numCelular2 = $_POST['numCelular2'];
                $domicilio2 = $_POST['domicilio'];
                $email = $_POST['email'];

                //$destinatario = "somos_loading@gmail.com";
                $destinatario = "lucas.98.rocca@gmail.com";
                $asunto = "Solicitud de atencion LOADING";
               
                $mensaje = "De: $nombre \n <br>"; 
                $mensaje .= "CUIL: $CUIL \n <br>";
                $mensaje .= "Fecha de Nacimiento: $fechaNac \n <br>";  
                $mensaje .= "Numero de Celular: $numCelular \n <br>";
                $mensaje .= "Numero alternativo: $numCelular2 \n <br>";
                $mensaje .= "Domicilio a asistir: $domicilio2 \n <br>";
                $mensaje .= "Email: $email ";
                
                ?>

                   <h3> Email enviado a: <?php  echo $destinatario ?> </h3>;
                   <h3> Asunto: <?php  echo $asunto ?> </h3>;
                   <h3> Mensaje: <br> <?php  echo $mensaje ?> </h3>;
            </div>
        </section>
        
    </div>
    <?php 
        include "../partials/footer.php";
    ?>
