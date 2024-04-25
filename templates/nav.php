<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='./templates/CSS/index.css' rel='stylesheet'>
</head>
<body>
<navbar>
       <navs>
        <a href="/index">Home</a>
        <a href="/blog">Your Blogs</a>
        <a href="/create">Create Blogs</a>
</navs>

<?php
if($_SESSION['name']){
    echo('<a id="login" href="login.php">Logout</a> ');
}else{
    echo('<a id="login" href="login.php">Login</a> ');
}
?>
        
    </navbar>
</body>
</html>