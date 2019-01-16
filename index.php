<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        print "Welcome Guillermo  <br>"; //Imprime en pantalla
        //Creando variable: Se usa el simbolo "$" y el nombre de la variable, ejemplo:
        $name="Guillermo  <br>"; //Se crea la variable nombre y se le asigna un valor, en este caso una cadena de texto

        //Imprimiendo variable:
        print $name;

        //Si deseamos concatenar un texto a una variable, adicionamos un punto "."
        //Esto asemeja al mas "+" en otros lenguajes. Ejemplo:

        print "Bienvenido ".$name;

        //print no admite imprimir en pantalla varias variables, para eso se usa "echo".

        /**
         * Llamando funciones
         */
         
         //Creando a la función
         function printName(){
             $name = "Guillermo Hernández";
             echo "Mi nombre es ".$name."<br>";
         }
         //LLamando la función
         printName();

         /**
          * Llamando un documento php
          */

          //Usamos la palabra "include". Para este ejemplo llamaremos a ejemplo.php
          //Esto nos ayuda a tener algo especifico en un solo documento y ser llamado
          //para usarlo en cualquier parte

          include ("ejemplo.php");

          //Llamando variables.php para ejemplo de ámbitos de variables
          include ("variables.php");

          //Llamando strings.php para ejemplo de strings
          include ("strings.php");

          //Llamando operadores.php para ejemplo de strings
          include ("operadores.php");

          //Llamando operadores.php para ejemplo de strings
          include ("constantes.php");



    ?>
</body>
</html>