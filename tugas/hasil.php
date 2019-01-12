<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $email = $_POST ['email'];
    $pass = $_POST ['pass'];
     if ($email == "bram@gmail.com" &&  $pass == "bram") {
       echo "Login Berhasil <br>";
     } else {
       echo "Login Gagal";
     }
     ?>
     <a href="logout.php">Logout</a>
  </body>
</html>
