<?php
    /**
     * En el ámbito de las variables en PHP, se presentan tres tipos de variables:
     * -Locales
     * -Globales 
     * -SuperGlobales
     */

    //Ejemplo de variable global
    //Esta es una variable global. Está en el ámbito principal de php 
     $name="Soy la variable Global ' <br>";

     function varLocalExample(){
         /**
          * Ejemplo de variable local
          *La variable dentro de la función es una variable local
          *Puede llamarse igual que la variable global pero al llamarse
          *Dentro de la función, el valor que se tomará es el valor asignado dentro de la misma.
          *Para poder usar la variable global dentro de la función, usamos la palabra "global" y el 
          *nombre de la variable. 
          *Ejemplo:
          */

         global $name; 

         $name="Variable local llamando a -->".$name;
         echo $name;

     };

     varLocalExample();

     /**
      * Variables estaticas:
      *Para que una variable conserve su valor, usamos la palabra "static"
      *Esto con la finalidad de que conserve el último valor que le fue asignado a la variable
      *Ejemplo:
      */

      function sumarIterador(){
          static $iterator = 0;
          $iterator++;
          echo $iterator."<br>";
          //Cada vez que se llame la función, el iterador se incrementara en uno
          //la variable ya no se iniciara en cero sino en el último valor que se le asignó
      }
      sumarIterador();
      sumarIterador();
      sumarIterador();
      sumarIterador();

?>