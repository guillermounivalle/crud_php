<?php
  if(isset($_GET['update'])){
      $update_id = $_GET['update'];  

      $bdquery = "SELECT * FROM users WHERE id=$update_id";
      $execute = mysqli_query($con, $bdquery);

      $row = mysqli_fetch_array($execute);

      $user = $row['user'];
      $pass = $row['passw'];
      $email = $row['email'];
  }
?>

<br/>

<form method="post" action="">
    <input type="text" name="user" value="<?php  echo $user ?>"/><br/>
    <input type="password" name="pass" value="<?php  echo $pass ?>"/><br/>
    <input type="text" name="email" value="<?php  echo $email ?>"/><br/>
    <input type="submit" name="updatedata" value="UPDATE"/>
</form>

<?php
    if(isset($_POST['updatedata'])){
        //Si se usa $_POST se debe recibir con $_POST
        $update_user = $_POST['user'];
        $update_password = $_POST['pass'];
        $update_email = $_POST['email'];

        $update = "UPDATE users SET user='$update_user', passw='$update_password', email='$update_email' WHERE id = '$update_id'";

        $execute = mysqli_query($con, $update);

        if($execute){
           echo "<script>alert('Datos actualizados ')</script>";
           echo "<script>window.open('formulario.php')</script>";
        }else{
            print "Error al eleiminar los datos";
        }
    }

?>