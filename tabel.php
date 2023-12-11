<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <input type="checkbox"> <!-- terakhir -->
    <nav>
      <div class="top">
        <img src="img/profile.jfif" alt="">
        <h1>MY WEBSITE</h1>
        <span class = "line"></span>
      </div>
      <div class="bot">
        <div class="nav-links">
          <div class="nav-link-wrapper"><a href="index.php"><img src="https://img.icons8.com/android/22/ffffff/home.png"><span>Home</span></a></div>
          <div class="nav-link-wrapper"><a href="formulir.php"><img src="https://img.icons8.com/pastel-glyph/22/ffffff/online-support.png"/><span>Formulir</span></a></div>
          <div class="nav-link-wrapper"><a href="tabel.php"><img src="https://img.icons8.com/metro/22/ffffff/export.png"/><span>Tabel</span></a></div>
        </div>
      </div>
    </nav>
    <div class="navbar"> <!-- terakhir -->
      <div class="left">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="right">
        <h1>MY WEBSITE</h1>
      </div>
    </div>

    <!--content-->

    <style>
 

  .card{
    position: relative;
    left: 45%;
    bottom: -60px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 320px;
    flex-direction: column;
    gap: 35px;
    border-radius: 10px;
    background: #e3e3e3;
    box-shadow: 16px 16px 32px #c8c8c8, -16px -16px 32px #fefefe;
  }

  .card h2{
    letter-spacing: 3px;
    margin-top: 1.6em;
  }

  .inputBox{
    position: relative;
    width: 86%;
  }

  .inputBox input{
    width: 100%;
    padding: 10px;
    border: none;
    background: transparent;
    border-left: 2px solid;
    border-bottom: 2px solid;
    border-bottom-left-radius: 8px;
  }

  .inputBox span{
    margin-top: 5px;
    position: absolute;
    left: 10;
    top: -6;
    padding: 10px;
    pointer-events: none;
    font-size: 0.8em;
    letter-spacing: 3px;
    border-radius: 8px;
    transition: 0.5s;
  }

  .inputBox input:focus, .inputBox input:valid{
    border: 2px solid black;
    border-radius: 8px;
  }

  .inputBox input:focus~span, .inputBox input:valid~span{
    transform: translateX(140px) translateY(-15px);
    font-size: 0.8em;
    padding: 5px 10px;
    background: #000;
    color: #fff;
  }

  button.submit{
    height: 45px;
    width: 100px;
    border-radius: 5px;
    border: 2px solid;
    cursor: pointer;
    background: transparent;
    font-size: 0.7em;
    letter-spacing: 3px;
    margin-bottom: 3.5em;
    transition: 0.5s;
  }

  button.submit:hover{
    background: #000;
    color: white;
  }
  
  </style>
    <form class="card" action="" method="post">
      <h2>Pendaftaran</h2>
      <div class="inputBox">
        <input type="text" name="name" required>
        <span>NAME</span>
      </div>

      <div class="inputBox">
        <input type="text" name="alamat" required>
        <span>ALAMAT</span>
      </div>

      <div class="inputBox">
        <input type="password" name="password" required>
        <span>PASSWORD</span>
      </div>

      <div class="inputBox">
        <input type="password" name="confirmpassword" required>
        <span>CONFIRM PASSWORD</span>
      </div>

      <button type="submit" name="submit" class = "submit">SUBMIT</button>
    </form>
  </body>
</html>

<?php
require 'config1.php';

if(isset($_POST["submit"])){
  $fullname = $_POST["name"];
  $email = $_POST["alamat"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];

  if($password != $confirmpassword){
    echo
    "
    <script> alert('Passwords Do Not Match!'); </script>
    ";
    exit;
  }

  $query = "INSERT INTO users1 VALUES('', '$name', '$nama', '$password')";
  mysqli_query($conn, $query);
  echo
  "
  <script> alert('User Inserted Successfully'); </script>
  ";
}
?>