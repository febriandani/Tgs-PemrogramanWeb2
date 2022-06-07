<?php 
 
include '../config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['repassword'];
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE U_EMAIL='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $pass = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO user (U_NAMA, U_EMAIL, U_PASSWORD)
                    VALUES ('$nama', '$email', '$pass')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style.css">
     <!-- Bootstrap CSS CDN -->
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./style/style5.css">
<!-- 
    Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header" style="padding-top:30px;">
  <!--Content before waves-->
  <div class="inner-header flex">
  <div class="card" style="width: 50%; padding-bottom: 30px; margin-top:100px; ">
  <div class="card-header">
  <!-- <a href="login.php"><i class="material-icons" style="float: left; ">arrow_back</i></a> -->
    <h5>Register</h5>
  </div>
  <form action="register.php" method="POST">
  <div class="card-body">
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="nama" placeholder="name@example.com">
  <label for="floatingInput">Name</label>
</div>
  <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
  <label for="floatingInput">Email</label>
</div>
  <div class="form-floating mb-3">
  <input type="password" class="form-control" id="floatingInput" name="password" placeholder="name@example.com">
  <label for="floatingInput">Password</label>
</div>
  <div class="form-floating mb-3">
  <input type="password" class="form-control" id="floatingInput" name="repassword" placeholder="name@example.com">
  <label for="floatingInput">Re - Password</label>
</div>

<button type="submit"  name="register" class="btn btn-primary" style="width: 150px; margin-top:10px;">Register</button> 
</form>
  </div>
  <hr>
  <label>Have an account ?</label>
  <a href="./login.php" style="float: center; font-weight:bold; text-decoration:none;">Log In</a>

</div>


  </div>
  
  <!--Waves Container-->
  <div>
  <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
  viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
  <defs>
  <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
  </defs>
  <g class="parallax">
  <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
  <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
  <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
  <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
  </g>
  </svg>
  </div>
  <!--Waves end-->
  
  </div>
  <!--Header ends-->
  
  <!--Content starts-->
  <div class="content flex">
    <p>By.Muhammad Febri Andani | 191011400390 </p>
  </div>
  <!--Content ends-->
</body>
</html>