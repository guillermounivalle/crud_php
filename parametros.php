<?php

    /**
     * 
     * Paso de parametros por valor y por referencia
     * 
     */

     //paso por valor

     function incrementar1($valor1){

        $valor1++;
        
        return $valor1;
     }

     //paso por referencia
     function incrementar2(&$valor2){

        $valor2++;
        
        return $valor2;
     }
     $num1 = 5;
     $num2 = 5;
     echo " variable con valor inicial--> $num1. Paso por valor: función incrementar($num1)
            retorna ---> ".incrementar1($num1).".  Valor de la variable despues de la función ---> ".$num1."<br>";
     echo " variable con valor inicial--> $num2. Paso por referencia: función incrementar($num2)
            retorna ---> ".incrementar2($num2).".  Valor de la variable despues de la función ---> ".$num2."<br>";

?>