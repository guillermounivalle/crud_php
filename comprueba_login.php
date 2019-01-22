<?php

    /**
     * Usaremos libreris PDO
     * 
     */

     try {
         $base = new PDO("mysql:host=localhost; dbname=mycrudphp", "root", "" );
         $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "SELECT * FROM USERS_PASS WHERE USER=  :login AND PASSWORD = :password";
         $result = $base->prepare($sql);
         //htmlentities convierte cualquier simbolo a html
         $login=htmlentities(addslashes($_POST["login"]));
         $password=htmlentities(addslashes($_POST["password"]));

         $result->bindValue(":login", $login);
         $result->bindValue(":password", $password);
        $result->execute();

        //rowCount(); Esta función nos retorna la cantidad de registros que devuelve una consulta
        //Para este caso, si el usuario no existe, la función devolvera 0. Si el usuario existe
        //nos retornará un valor de 1.

        $num_register = $result->rowCount();

        if($num_register !=0){
            session_start();
            $_SESSION["user"]=$_POST["login"];
            header("location:userregistered.php");
        }else{

            //La funcion "header"de php sirve para redirigir una página
            header("location:login.php");

        }

     } catch (exception $e) {
         die("Error: ".$e->getMessage());
     }
?>