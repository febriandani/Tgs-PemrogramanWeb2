<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "toko_online";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("<script>alert('Gagal tersambung dengan database.')</script>");
}


?>