<?php

    /**
     * 
     * Funciones matemáticas y casting 
     * 
     */

     $num1 = rand();
          //potencia (base, exponente)   
     $num2 =     pow (2, 5);
     echo "El número aleatorios es ".$num1."<br>";
     echo "El número 2 elevado a la potencia 5 (2^5) es ".$num2."<br>";

     //Casting
     $num3 = "5";
     $castingVar = (int)$num3;

     echo "El resultado casteado es ".$castingVar."<br>";

     //Ciclo for
     for($i = 0; $i < 6; $i++){
         echo "Probando el ciclo for. Iterador ----> ".$i."<br>";
     }

     $var1 = 1;
     while ($var1 <= 10) {
         $var1++;
         echo "Probando ciclo 'while' con iterador en ---> ".$var1."<br>";
     }

?>