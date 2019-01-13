<!DOCTYPE html>
    <meta charset="utf-8" />
    <!-- Bloque de código php    -->
    <?php
        //$ se usa para llamar variables, ej: variable connect ==> $con
        //                        servidor,   usuario, contraseña, nombre BD 
        $con = mysqli_connect("localhost", "root","","mycrudphp") or die("Error en la conexion");
    ?>

    <html>
        <head>
            <title> CRUD PHP </title>
            <meta charset="utf-8" />
        </head>
        <body>
            <form method="POST"   action="formulario.php">
                <label> Nombre: </label>
                <input type="text" name="name" placeholder="Escriba su nombre"><br/>
                <label> Contraseña: </label>
                <input type="password" name="passw" placeholder="Escriba su contraeña"><br/>
                <label> email: </label>
                <input type="text" name="email" placeholder="Escriba su e-mail"><br/>
                <input type="submit" name="insert" value="Insertar datos">
            </form>   

            <?php
                if(isset($_POST['insert'])){
                   $user = $_POST['name'];     
                   $pass = $_POST['passw'];
                   $email = $_POST['email'];

                   $insert = "INSERT INTO users (user, passw, email) VALUES ('$user', '$pass', '$email' )";

                   $execut = mysqli_query($con, $insert);

                   if($execut){
                        echo "<h3> Insertado correctamente</h3>";
                   }else{
                        echo "<h3> Error al insertar</h3>";
                   }
                }
            ?>

            <br/>

            <table width= "500" border="2" style="background-color #F9F9F9;">
                <tr>
                    <th>ID</th>
                    <th>USER</th>
                    <th>PASSWORD</th>
                    <th>EMAIL</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>

                <?php
                    $bdquery = "SELECT * FROM users";

                    $execute = mysqli_query($con, $bdquery);

                    $iterator = 0;

                    while($row = mysqli_fetch_array($execute)){
                        $id = $row['id'];
                        $user = $row['user'];
                        $password = $row['passw'];
                        $email = $row['email'];
                        
                        $iterator++;
                ?>

                <tr align="center">
                    <td> <?php echo $id;  ?>  </td>
                    <td> <?php echo $user;  ?>  </td>
                    <td> <?php echo $password; ?>  </td>
                    <td> <?php echo $email;  ?>  </td>
                    <td> <a href="formulario.php?update =<?php echo $id; ?>"> Update</a> </td>
                    <td> <a href="formulario.php?delete =<?php echo $id; ?>"> Delete </a> </td>
                    
                </tr>
                <?php } ?>
            </table>
        </body>
    </html>
