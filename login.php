<?php
require_once 'koneksi.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

$email = $_POST["email"];
$password = $_POST["password"];


$query_sql = "SELECT * FROM registrasi WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result)>0){
  header("Location: index.php");
}else{
  echo "<center><h1>Incorrect email or password. Please Log in Again.</h1>
  <button><strong><a href = 'index.php'>Login</a></strong></button></center>";
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/stylenya.css">
            <header class="header">
                <h1>Login</h1>
                <ul>
                    <li><a href="depan.php" class="active">login</a></li>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="genre.php" class="active">Genre</a></li>
                    <li><a href="guide.php" class="active">Guide</a></li>
                </ul>
            </header>
    </head>
    <body>
        <div class="container">
            <h2>log in your account</h2>
            <form action="login.php" method="post">
                <div class="form-group">
                <label for="username">Username :</label><br> 
                 <input type="email" id="email" name="email" placeholder="Email" required>
                 <label for="password">Password :</label><br>
                 <input type="password" id="password" name="password" placeholder="Password" required>
                 <a href="registrasi.php">Belum punya akun? <span>Daftar disini</span></a><br><br>
                 <button type="submit" name="Submit" ;>Enter</button>
                 </div>
            </form>
        </div>
    <body>
            <div class="content"></div>
            <footer class="footer">
                <span class="footer-text">&copy; 2023 Cinema 19. All rights reserved. By Iqbaal Hafiizhuddiin.</span>
            </footer>
        </body>
    </body>
</html>