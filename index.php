<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request){
    case '/index':
        require 'index.php';
        break;
    case '/blog':
        require 'blog.php';
        break;
    case '/create':
        require 'create.php';
        break;
    case '/login':
        require 'login.php';
        break;
    case '/signup':
        require 'signup.php';
        break;

}



session_start();
echo ($_SESSION['name']);

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
   <?php require 'templates/nav.php' ?>
    <div id="home">
    <h1>Hello <?php if($_SESSION['name']){echo "<span class='name' >".$_SESSION['name']."</span>";}else{ echo("<span  class='name'> User </span>"); } ?> ,you can Make a Post !</h1>
    <p>           Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia earum asperiores exercitationem laudantium voluptatum, sint consectetur aliquam optio soluta ratione in consequatur rerum rem quis alias ad corrupti quos libero?
    Animi exercitationem enim, totam, eaque ea nulla tempore amet minima libero possimus iusto numquam corrupti blanditiis, quaerat rerum illum at! Esse amet labore vitae? Dolores est blanditiis libero a unde.
    Autem tempore quos nostrum tempora omnis nemo esse, ipsa vitae. Repellat, cum. Iste, officia repellendus natus fuga itaque tempore nostrum numquam repudiandae praesentium maiores, qui quam ipsa, delectus autem accusantium!
    Voluptatibus numquam nobis eum cum architecto animi omnis vel, neque tempore ut ipsum quibusdam quo aliquam veniam incidunt minus commodi corrupti beatae voluptates totam dolorum doloribus. Quaerat amet maiores incidunt!
    Autem ad, amet libero minima voluptates et quam aliquid, veritatis voluptatum at tempore excepturi repellat velit ipsam, iste aspernatur consequatur quaerat facere molestiae. Corporis suscipit fugiat provident dolorum laboriosam eos?
    Assumenda itaque ad repellat et ut saepe pariatur, labore, voluptate autem natus ex unde quisquam in cumque aliquam ipsum dolores officiis rem sunt omnis sit animi molestias. Quidem, expedita libero?
    Obcaecati sed soluta magnam delectus doloribus pariatur blanditiis facere corrupti quidem. Aspernatur soluta veritatis nesciunt rem, reprehenderit ex at dignissimos. Sit expedita aliquid nobis! Recusandae aut deserunt ut aliquam rerum.
    Rerum dolores quam, ex nobis, tenetur, quibusdam odit natus dolorem nisi incidunt architecto tempora enim est nemo vitae libero animi quo nulla et. Aliquid qui modi esse quos suscipit accusamus?
    Tempora laudantium quos fugit soluta laborum quasi, nihil delectus aliquid veritatis rerum deleniti, adipisci numquam ea excepturi nulla magni voluptate error quam aliquam enim voluptas! Vero totam quia tempora accusantium?
    Adipisci qui architecto numquam magnam culpa neque tempore quo totam doloremque aut, ipsum vero tenetur, et eveniet officiis commodi eos omnis tempora ad dignissimos exercitationem voluptatibus magni fugit praesentium? Accusantium!</p>
</div>



</body>
</html>