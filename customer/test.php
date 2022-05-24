<?php 

include "../config.php";

$error = '';
$validate = '';

if(isset($_POST['submit'])){
    $user = "CUS";
    $date = date('m');
    $rand = rand(1,1000);
    $name = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $reepas = $_POST['repassword'];
    $concat = $user ."".$date."".$rand;

    if(!empty($name) && !empty($alamat) && !empty($telp) && !empty($email) && !empty($alamat) && !empty($pass) && !empty($reepas)) {
        if($pass == $reepas){
            if(cek_email($conn, $email) == 0) {
                $passHash = password_hash($pass, PASSWORD_DEFAULT);
                $query = "INSERT INTO customer (CUS_ID, CUS_NAMA, CUS_ALAMAT, CUS_EMAIL, CUS_PHONE, CUS_PASSWORD) VALUES ('$concat', '$name','$alamat','$email','$telp','$pass')";
                $result   = mysqli_query($conn, $query);
                if($result){
                    header("Location: Data_Customer.php");
                }
                $error = "Register User Gagal!";
            }
            $error = "Email Sudah Terdaftar";
        }
        $validate = "Password tidak sama";
    }
    $error = "Data tidak boleh kosong";

}

function cek_email($email,$conn){
    $em = mysqli_real_escape_string($conn, $email);
    $query = "SELECT * FROM customer WHERE CUS_EMAIL = '$em'";
    if( $result = mysqli_query($conn, $query) ) return mysqli_num_rows($result);
}

?>