<?php
require_once 'koneksi.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO registrasi (email, username, password) VALUES ( '$email', '$username', '$password')";

if (mysqli_query($conn, $query_sql)){
  header ("Location: index.php");
}else{
  echo "registration failed :" .mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registrasi</title>
  <link rel="stylesheet" href="css/stylenya.css">
  <header class="header">
    <h1>Registrasi</h1>
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
    <h2>Create New Account</h2>
    <form action="registrasi.php" method="post">
      <div class="form-group">
        <label for="username">Username :</label><br> 
        <input type="text" id="name"  placeholder="Masukan Nama" name = "username"  required>
        <label for="Email">Email :</label><br> 
        <input type="email" id="email"  placeholder="Masukan Email" name = "email" required>
        <label for="password">password :</label><br>
        <input type="password" id="password"  placeholder="Password" nama = "password" required>
        <input type="password" id="confirm_password" name="password" placeholder="Konfirmasi Password" required>
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
