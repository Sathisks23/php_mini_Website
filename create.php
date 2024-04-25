<?php
$con =new mysqli('localhost','dckap','Dckap2023Ecommerce','practice');

session_start();
   if(!isset($_SESSION['name'])) {
       header("Location: index.php");
   }else{
       $name =$_SESSION['name'];
   }






if(isset($_POST['create'])){
   
    $content = $_POST["content"];
     $uid =$_SESSION["uid"];
  var_dump($_FILES);

   $filename = $_FILES["post_image"]["name"];
   $tempname = $_FILES["post_image"]["tmp_name"];
   $folder = "blogimage/".$filename;


    $sql="INSERT into blog (uid,bcontent,bimage) values('$uid','$content','$filename') ";
     $con->query($sql);

     if (move_uploaded_file($tempname, $folder)) {
        header('Location:blog.php');    
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
    
}
require 'templates/nav.php' ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='templates/CSS/create.css' rel='stylesheet' >
</head>
<body>
    
    <form  method='POST' action="<?php echo($_SERVER['PHP_SELF'])  ?>" enctype="multipart/form-data">
<label for="image">Upload a image</label>:<input  type="file" name="post_image" required> <br><br>
<label for="content"><textarea id='content' name="content"  id="" cols="100" rows="20" required>Type your content</textarea></label> <br><br>
<input type="submit" class='create' name="create" value='Create'>
</form>
</body>
</html>