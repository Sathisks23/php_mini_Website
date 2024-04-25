
<?php

if(isset($_POST['submit'])){
    echo "Filename: " . $_FILES['file']['name']."<br>";
    echo "Type : " . $_FILES['file']['type'] ."<br>";
    echo "Size : " . $_FILES['file']['size'] ."<br>";
    echo "Temp name: " . $_FILES['file']['tmp_name'] ."<br>";
    echo "Error : " . $_FILES['file']['error'] . "<br>";

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="create1.php" method="POST" enctype="multipart/form-data">
   <input type="file" name="file">
   <input type ="submit" name='submit' value="submit">
</form>
</body>
</html>