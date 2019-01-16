<?php

    /**
     * 
     * Definiendo Constantes:
     * 
     * -El Nombre de las constantes van en mayúscula
     * No deben llevar el simbolo $
     * Es obligatorio usar define
     * El ámbito de las constantes es global por defecto
     * Las constantes no se pueden redefinir
     * Las constantes solo almacenan valores escalares
     * 
     * 
     */
            //Nombre   Valor,      Insensible a mayúsculas
     define("AUTOR",   "Guillermo",   true);

     echo AUTOR."<br>";
     echo "El autor es ".AUTOR."<br>";
     echo "El autor es ".autor."<br>";

     //Constantes predefinidas por PHP. Ejemplo: __FILE__

     echo "Constante __FILE__: <br>La constante __FILE__ muestra el archivo donde se está llamado -->  ".__FILE__;

?>