





<?php require 'templates/nav.php' ?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='templates/CSS/blog.css' rel='stylesheet'>
</head>
<body>
<h1 class='posth1'>Your Blogs </h1>

<?php

$con =new mysqli('localhost','dckap','Dckap2023Ecommerce','practice');

$sql = "SELECT uid,bcontent,bimage,uname from blog INNER join b_user on blog.uid = b_user.u_id";

$result=$con->query($sql);



if($result->num_rows>0){
    while($row=$result->fetch_assoc(    )){

    ?>


       
           <div  id='post'> 
                <h5><?php echo $row['uname']; ?></h5> 
                <h2><?php echo $row['bcontent'];?></h2>
                <img src="/blogimage/<?php echo $row['bimage'];?>" >
    </div>

                <?php

    }  
}


?>



</body>
</html>