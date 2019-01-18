<?php
    /**
     * 
     * Trbajndo base datos con POO
     * 
     */

     require("varconexiondb.php");
     $connect= new mysqli($db_host, $db_user, $db_password, $db_databasename2);
     if($connect->connect_errno){
         echo "Falló la conexión".$connect->connect_errno; 
     }

     //mysqli_set_charset($connect, "utf8"); Así se hace en procedimental

     $connect->set_charset("utf8"); //Así se hace con POO

     //Instrucción SQL
     $sql= "SELECT * FROM userdata";

     //$result = mysqli_query($connect, $sql); Así se hace de manera procedimental
     $result = $connect->query($sql);

     if($connect->errno){
         die($connect->error);
     }

     echo "<br>  Conectando a base de datos con POO  <br>";
     //while($file = mysqli_fetch_row($result))--> Así se hace de manera procedimental   
    while($file = $result->fetch_array()){
        
        echo "<table width='50%'  align='center' border='1'><tr><td>";
        for($i = 0; $i < 4; $i++){
            if($i == 3){
                echo $file[$i]."</td><td></tr></table> " ;
            }else{
                echo $file[$i]."</td><td> " ;
            }       
        }           
    } 

    $connect->close();
    
   
?>