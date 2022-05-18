<?php 
include '../config.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

	if(mysqli_query($conn, "INSERT INTO customer VALUES('$nama', '$alamat','$phone','$email','$passwordHash' )")){
		header("location:Data_Customer.php?alert=berhasil");
	} 