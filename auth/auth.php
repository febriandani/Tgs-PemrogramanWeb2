<?php
include "../config.php";
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT CUS_NAMA FROM customer WHERE CUS_EMAIL = '$email' AND CUS_PASSWORD = '$password'";
$result   = mysqli_query($conn, $query);

if($result) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['cus_nama'] = $result['CUS_NAMA'];
    header('Location: index.php');
} else {
    header('Location: login.php');
}

?>