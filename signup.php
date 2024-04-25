
<?php
session_start();
   $con =new mysqli('localhost','dckap','Dckap2023Ecommerce','practice');
   
   


if(isset($_POST['Signup'])){
    
 
    $name=  $_POST['name'] ;
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $sql = "INSERT into b_user(uname,uemail,upassword) values('$name','$email','$password')";
    
    if($con->query($sql)===TRUE){
      $sql = "SELECT u_id from b_user where uemail='$email'";
      $result = $con->query($sql);
      $row = $result->fetch_assoc();
      echo('details added');
      $_SESSION['name'] =  $name;
      $_SESSION['uid']= $row['u_id'];

      
       header("Location:index.php");

    }else{
        echo "Error: " . $sql . "<br>" . $con->error;
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
    <label for="naem">User Name :</label>  <br>  <input id='name' name='name' type="text" required> <br> <br>
    <label for="email">Email :</label>  <br>  <input id='email' name='email' type="text" required> <br> <br>
    <label for="password">Password :</label> <br>  <input id='password' name='password' type="password" required> <br> <br>
<label for="cpassword">Confirm Password :</label> <br> <input  id='cpassword' type="passowrd" required> <br><br>
<input type="submit" name='Signup' value='Signup'>
    
<p>Already have an account  <a href="login.php">Login</a> </p> 
   </form>

</body>
</html>