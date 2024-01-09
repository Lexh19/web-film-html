<?php
$servername = "localhost";
$database = "film";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("connection failed :" . mysqli_connect_error());
}else{
 echo"";
}
?> 