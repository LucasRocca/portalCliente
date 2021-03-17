<?php
    
    session_start();

      require 'database.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])){
        $records = $connection->prepare('SELECT id_user, password, email FROM usuarios WHERE email=:email');
        $records->bindParam(':email',$_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        //comparo la contrasena del form con la de la db
        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])){
            $_SESSION['id_user'] = $results['id'];
            header('Locationn:  /Login.php');
        }else{
            $message = 'Los datos ingresados son incorrectos';
        }
    } 
?> 
