<?php
    /**
     * 
     * Operacones matemáticas usadas en operaciones.php    * 
     * 
     */

     if(isset($_POST["button"])){
         $num1 = $_POST["num1"];
         $num2 = $_POST["num2"];
         $operacion = $_POST["operacion"];

        calcular($operacion, $num1, $num2);
     }    

     function calcular($operador, $num1, $num2){
        switch ($operador) {
            case "Suma":
                echo "El resultado es ".($num1 + $num2);
                break;
            case "Resta":
                echo "El resultado es ".($num1 - $num2);
                break;
            case "Multiplicación":
                echo "El resultado es ".($num1 * $num2);
                break;
            case "División":
                if($num2 == 0){
                    echo "<p> No es posible dividir un número por cero ( 0 ) </p>";
                }else{
                    echo "El resultado es ".($num1 / $num2);
                }                
                break;    
        }
     }
         
     
?>