<?php require 'database.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Coneccion a bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css"> 
        <!-- FONT AWESOME 5 -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <title>Clientes</title>
    <?php include '../partials/nav.php'?>
</head>
<body>

<section id="container"> 
          <h1> Lista de usuarios </h1>
          <a href="Registro.php" class="btn_new">Crear usuario</a>
    <table class="table table-hover">
        <thead>
            <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opcion</th>
                </tr>
        </thead>
        <tbody> 
            <?php 
                $consulta = "SELECT id_user, nombre, dni, rol, email from usuarios";
                $registro = mysqli_query($mysqli, $consulta);

                while ($row = mysqli_fetch_array($registro)){ ?>
                    <tr>
                        <td><?php echo $row ['id_user'] ?></td>
                        <td><?php echo $row ['nombre'] ?></td>
                        <td><?php echo $row ['dni'] ?></td>
                        <td><?php echo $row ['rol'] ?></td>
                        <td><?php echo $row ['email'] ?></td>
                        <td>
                            <a href="../partials/update.php?id_user=<?php echo $row['id_user'] ?>" class="btn btn-primary">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="../partials/delete.php?id_user=<?php echo $row['id_user'] ?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</section>
<footer>
<?php include '../partials/footer.php'?>
</footer>
</body>
</html>