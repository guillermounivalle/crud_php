
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
        <style>
	        h1{
		        text-align:center;
	        }

	        table{
		        background-color:#FFC;
		        padding:5px;
		        border:#666 5px solid;
	        }
	
	        .no_validado{
		        font-size:18px;
		        color:#F00;
        		font-weight:bold;
	        }   
	
	        .validado{
		        font-size:18px;
		        color:#0C3;
		        font-weight:bold;
	        }


        </style>
    </head>
    <?php
        /**
        * 
        * Vamos a trabajar con operadores de comparación:
        * =, ==, ===, >=, <= entre otros 
        * 
        */

        $var1 = 7; //Variable de tipo entero
     
        $var2 = "7"; //Variable de tipo entero
     
        $var3 = "Guillermo"; //Variable de tipo entero

        /**
        * Comparando variables iguales
        *Dos variables pueden ser iguales aunque sean de diferente tipo
        *Ejemplo: $var1 y $var2 son el número 8 pero $var1 es de tipo entero
        *y $var2 es de tipo string. Si se evalúan con '==' se evalúa si son iguales.
        *Sí se evalúan con '===' se evalúa si son identicas
        */

        function isEqual(){
          
          global $var1, $var2;
          if($var1 === $var2){
              echo "Son variables iguales 'var1' ( ".$var1." )  y 'var2' ( ".$var2." ) y del mismo tipo";
          }
          else{
              echo "Son variables iguales 'var1' ( ".$var1." )  y 'var2' ( ".$var2." ) pero no del mismo tipo";
          }
      }

        isEqual();
    ?>
    <body>
        <h1>USANDO OPERADORES COMPARACIÓN</h1>

        <form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">
            <table width="15%" align="center">
                <tr>
                    <td>Nombre:</td>
                    <td><label for="nombre_usuario"></label>
                    <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
                </tr>
                <tr>
                    <td>Edad:</td>
                    <td><label for="edad_usuario"></label>
                    <input type="text" name="edad_usuario" id="edad_usuario"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
                </tr>
            </table>
        </form>
        <!-- El código php que seencuentra en validacion.php se encontraba en esta línea-->
        

    </body>
</html>
