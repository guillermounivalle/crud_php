

<?php

    /**
     * 
     * Conectando a la base de datos
     * 
     */
    //VARIABLES QUE IDENTIFICAN LA BASE DE DATOS. Estas variables están comentadas.
    //Están creadas en "varconxiondb.php" se llaman con un "require"
     //$db_host="localhost";
     //$db_databasename="crud2_php_";
     //$db_user="root";
     //$db_password="";
     require("varconexiondb.php");

     //CONECTANDO A LA BASE DE DATOS
     $db_connect=mysqli_connect($db_host, $db_user, $db_password, $db_databasename2);
     //Función en caso de no conectarse a la base de datos
     if(mysqli_connect_errno()){
         echo "No se pudo conectar con la base de datos";
         exit();
     }
     
     //función para que acepte caracteres latinos
     mysqli_set_charset($db_connect, "utf8");

     //Función en caso de el error sea por que está mal el nombre de la base de datos
     mysqli_select_db($db_connect, $db_databasename2) or die ("No se encuentra la DB");

     // CONSULTANDO A LA BASE DE DATOS
     $query="SELECT * FROM USERDATA";

     //EJECUNTANDO LA CONSULTA
     $result = mysqli_query($db_connect, $query);
     
     //VARIABLE QUE MOSTRARÁ LA INFORMACIÓN
     //$file = mysqli_fetch_row($result);  Usaré dentro del while

     //IMPRIMIENDO INFORMACION.  $file almacena en un array
     function imprimir(){
         global $result;
        while($file = mysqli_fetch_row($result)){
            echo "<table width='50%'  align='center' border='1'><tr><td>";
            for($i = 0; $i < count($file); $i++){
                if($i == (count($file))-1){
                    echo $file[$i]."</td><td></tr></table> " ;
                }else{
                    echo $file[$i]."</td><td> " ;
                }
                
            }  
              
        } 
        
       
        return $result;
        mysql_close();
    }
    echo "Información obtenida de la base de datos <br>"; 
    imprimir();

    


?>
