<?php
 echo "estas dentro del registro php";
?>

<?php
    require 'database.php';

    $message = '';

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
        // stament ejecuta el metodo prepare para pasar la consulta SQL
        $stmt = $connection->prepare($sql);
        //vinculamos los parametros
        $stmt->bindParam(':email',$_POST['email']); 
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password',$_POST['password']); 

        if($stmt->execute()){
            $message = 'Usuario creado correctamente' ;
        } else{
            $message = 'Ha ocurrido un error para registrar su contrsena' ;
        }
    }
?>