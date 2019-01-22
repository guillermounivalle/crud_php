<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
        h1{
            text-aligne:center;
        }
        table{
            width:%25;
            background-color: #FFC;
            border:2px dotted #F00;
            margin:auto;
        }

        .izq{
            text-aligne:right;
        }

        .der{
            text-aligne:left;
        }

        td{
            text-aligne: center;
            padding:10px;
        }
    </style>
</head>
<body>
    <h1> INTRODUCIR DATOS </h1>
    <form action="comprueba_login.php" method="post">
        <table>
            <tr>
                <td class="izq">Login</td>
                <td class= "der"><input type = "text" name="login"></td>
            </tr>
            <tr>
                <td class= "izq">PASSWORD: </td>
                <td class= "der"><input type = "password" name="password"></td>
            </tr>    
            <tr>
                <td class colspan="2"><input type="submit" name="send" value="LOGIN"></td>
            </tr>
        </table>
    </form>

    
</body>
</html>