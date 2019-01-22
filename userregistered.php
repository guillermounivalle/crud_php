<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION["user"])){
            header("location:login.php");
        };
    ?>
    <h1> Welcome Users</h1>
    <p>Esta es la pagína para usuarios registrados<br/></p>
    <?php
        echo "Hola  -----> ".$_SESSION["user"]."<br/>";


    ?>
    <p><a href="closesession.php"> Cierre sesión </a></p>
</body>
</html>