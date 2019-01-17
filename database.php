

<?php

    /**
     * 
     * Conectando a la base de datos
     * 
     */
    //VARIABLES QUE IDENTIFICAN LA BASE DE DATOS
     $db_host="localhost";
     $db_databasename="crud2_php_";
     $db_user="root";
     $db_password="";

     //cONECTANDO A LA BASE DE DATOS
     $db_connect=mysqli_connect($db_host, $db_user, $db_password, $db_databasename);
     //Función en caso de no conectarse a la base de datos
     if(mysqli_connect_errno()){
         echo "No se pudo conectar con la base de datos";
         exit();
     }
     
     //función para que acepte caracteres latinos
     mysqli_set_charset($db_connect, "utf8");

     //Función en caso de el error sea por que está mal el nombre de la base de datos
     mysqli_select_db($db_connect, $db_databasename) or die ("No se encuentra la DB");

     // CONSULTANDO A LA BASE DE DATOS
     $query="SELECT * FROM USERDATA";

     //eJECUNTANDO LA CONSULTA
     $result = mysqli_query($db_connect, $query);
     
     //VARIABLE QUE MOSTRARÁ LA INFORMACIÓN
     $file = mysqli_fetch_row($result);

     //IMPRIMIENDO INFORMACION.  $file almacena en un array
     function imprimir($filePrint){
        $result = "";
        for($i = 0; $i < count($filePrint); $i++){
            $result .= $filePrint[$i]." " ;
        }    
       
        return $result;
    }
    echo "Información obtenida de la base de datos <br>"; 
    echo "".(imprimir($file));


?>
