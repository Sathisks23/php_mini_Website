
<?php

session_destroy();

$con =new mysqli('localhost','dckap','Dckap2023Ecommerce','practice');

if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password = $_POST['password'];
     $sql  = "SELECT uname,u_id FROM b_user WHERE uemail = '$email' and upassword = '$password' ";
     

     if( $con->query($sql)==TRUE ){
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        if($result->num_rows>0){
            session_start();
         $_SESSION['name']=$row['uname'];
         $_SESSION['uid']=$row['u_id'];
         
         header('Location:index.php');
        }else{
         echo ('Password didn"t match');
      }
     }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='/templates/CSS/login.css' rel='stylesheet' >
</head>
<body>
    
   <form method='POST' action="<?php echo  $_SERVER['PHP_SELF'] ;?>">
    <label for="email">Email :</label>  <br>  <input name='email' type="text"> <br> <br>
    <label for="password">Password :</label> <br>  <input name='password' type="password"> <br> <br>
<input type="submit" name='Login' value='Login'>
    <p>Don't have an account  <a href="signup.php">Signup</a> </p> 
   </form>

</body>
</html>