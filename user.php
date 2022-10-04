<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="delete">
    <?php
   
require_once('database.php');
 if(empty($_GET['id'])){
    //

}else{
    $id = $_GET['id'];
$sqli = "DELETE FROM id WHERE id = $id";
if(mysqli_query($connect, $sqli) === TRUE){
    echo "yes";
}
}
  
   
    $sql = "SELECT * from id";
    $anjam = mysqli_query($connect, $sql);
    while($user = mysqli_fetch_assoc($anjam)){
      


?>
   
        <div class="delete1">
            <div class="title">
                <h1> name : <?php   echo $user['name'];   ?></h1>
            </div>
            <div class="title">
                <h1>password : <?php   echo $user['password'];   ?></h1>
            </div>
           
            <a href="?id=<?php   echo $user['id'];   ?>">ژیبرن</a>
        </div>
        <?php
    }
        ?>
    </div>
</body>
</html>