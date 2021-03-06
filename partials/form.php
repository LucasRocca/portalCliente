<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linea Nueva -  LOADING</title>
    <!-- Coneccion a bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/Index.css"> 
    <link rel="stylesheet" type="text/css" href="../css/normalize.css"> 

<title>form</title>

</head>

  <body>
        <section> 
            <form class="needs-validation" id="formPlanilla" method="POST" action="../php/email.php">
              <div class="container">
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Nombre completo del titular</label>
                    <input type="text" class="form-control" name="nombre" value="" placeholder="Nombre y Apellido" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fechaNac" id="validationTooltip03"  placeholder="00/00/00" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip02">CUIL/CUIT</label>
                    <input type="num" class="form-control" name="CUIL" id="validationTooltip02" placeholder="20-404004000-8" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Numero de celular 1</label>
                    <input type="number" class="form-control" name="numCelular" id="validationTooltip03"  placeholder="3564123123" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Domicilio del titular</label>
                    <input type="text" class="form-control" name="domicilio1" value="" placeholder="San Martin 1111">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Numero de celular 2</label>
                    <input type="number" class="form-control" name="numCelular2" id="validationTooltip03"  placeholder="3564123123" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip02">Domicilio a asistir nuevo servicio</label>
                    <input type="text" class="form-control" name="domicilio" id="validationTooltip02" placeholder="San Martin 0000" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip02">E-mail</label>
                    <input type="email" class="form-control" name="email" id="validationTooltip02" placeholder="example@gmail.com" required>
                  </div>
                </div>
                <div>
                  <button class="btn btn-primary" name="btnEnviar" id="btnEnviar" type="submit">Enviar</button>
                </div>
            </div>
          </form>
      </section>

  </body>
   <!-- conectar a Jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>