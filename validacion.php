<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
        <style>

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
    //Dentro del if estamos comprobando sí se ha pulsado el botón "enviar"

    if(isset($_POST["enviando"])){ //$_POST es una variable super global
        $user=$_POST["nombre_usuario"];
        $age=$_POST["edad_usuario"];
        if($user == "Guillermo" && $age >= 18){
            echo "<p class='validado'> Puedes entrar </p>";
        }else{
            echo "<p class='no_validado'> No tienes permiso para entrar </p>";
        }
    }
?>