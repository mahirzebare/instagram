<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "instagram";
$connect = mysqli_connect($hostname, $username, $password, $database);
if(!$connect)
{
    die('database rorr' .mysql_erorr());
}


?>