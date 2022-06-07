<?php
include '../config.php';

session_start();

if(isset($_SESSION['U_NAMA'])){
  header("Location: ../index.php");
}

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	//cek user login 
	$cek_login = $conn->query("select * from user where U_EMAIL='$email'");
	$ktm_login = $cek_login->num_rows;
	$data_login = $cek_login->fetch_assoc();

	if($ktm_login>=1){
		//login email tersedia
		//verify password 
		if(password_verify($password,$data_login['U_PASSWORD'])){
			echo "Login Berhasil";
			//silakan buat session dan redirect disini
			session_start();
			$_SESSION['U_NAMA']=$data_login['U_NAMA'];

			// redircet 
			header("Location:../index.php");
		}else{
			echo "Login gagal, Silakan coba lagi!";
		}
	}else{
		//login gagal, email tidak tersedia
		echo "Login gagal, Email tidak tersedia!";
	}

	$conn->close();
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
    
</head>
<body>
<!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">
  <!--Content before waves-->
  <div class="inner-header flex">
  <div class="card" style="width: 50%; padding-bottom: 30px;">
  <div class="card-header">
    <h5>Login</h5>
  </div>
  <form action="login.php" method="POST">
  <div class="card-body">
  <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
  <label for="floatingPassword">Password</label>

  <br>
</div>
<button type="submit"  name="login" class="btn btn-primary" style="width: 150px; margin-top:10px;">Log In</button> 
</form>
  </div>
  <hr>
  <label>Don't have account ?</label>

  <a href="./register.php" style="float: center; font-weight:bold; text-decoration:none;">Sign Up</a>
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