
<style>

    .resaltar{
        color:#F00;
        font-weight:bold;
    }

</style>
<?php
    //Al llamar la clase, debemos separarla con comillas simple si estamos usando comillas dobles
    //Para representar el string.
    echo "<p class='resaltar'> Ejemplo de string usando clases para darles propiedades </p>";


    /**
     * comparando dos strings
     */

     //Comparando strings sin ignorar las mayúsculas
     //Para eso usamos strcasecmp
     //Retorna 1 sí no son iguales, retorna 0 sí son iguales

     function isEqualStrings1(){
         $string1="'CASA'";
         $string2="'casa'";

         $result=strcasecmp($string1,$string2);
        echo "Comparando strings ------> 'CASA' y 'casa' usando strcasecmp <br>";
        echo "El resultaso comparando ".$string1." y ".$string2." usando strcasecmp es -----> ".$result."<br>";    
         if($result==0){
            echo "Son iguales <br><br>";
         }else{
            echo "No son iguales <br><br>";
         }
         
     }

     function isEqualStrings2(){
        $string1="'CASA'";
        $string2="'casa'";

        $result=strcmp($string1,$string2);
        echo "Comparando strings ------> 'CASA' y 'casa' usando strcmp<br>";
        echo "El resultaso comparando ".$string1." y ".$string2." usando strcmp es -----> ".$result."<br>";
        if($result==0){
            echo "Son iguales <br><br>";
         }else{
            echo "No son iguales <br><br>";
         }
    }


     isEqualStrings1();
     isEqualStrings2();

?>