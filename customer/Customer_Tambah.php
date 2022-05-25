<?php
//menyertakan file program koneksi.php pada register
require('../config.php');

$error = '';
$validate = '';
//mengecek apakah form registrasi di submit atau tidak
if(isset($_POST['submit']) ){
        // $user = "CUS";
        $rand = rand(1,999);
        $year = date('y');
        $date = date('m');
        // menghilangkan backshlases
        $name     = stripslashes($_POST['nama']);
        //cara sederhana mengamankan dari sql injection
        $name     = mysqli_real_escape_string($conn, $name);
        $alamat    = stripslashes($_POST['alamat']);
        $alamat    = mysqli_real_escape_string($conn, $alamat);
        $telp    = stripslashes($_POST['telp']);
        $telp    = mysqli_real_escape_string($conn, $telp);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $repass   = stripslashes($_POST['repassword']);
        $repass   = mysqli_real_escape_string($conn, $repass);
        $concat =  $year . "". $date . "" .$rand; 
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($name)) && !empty(trim($alamat)) && !empty(trim($email)) && !empty(trim($telp)) && !empty(trim($password)) && !empty(trim($repass))){
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if($password == $repass){
                //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                if( cek_email($email,$conn) == 0 ){
                    //hashing password sebelum disimpan didatabase
                    $pass  = password_hash($password, PASSWORD_DEFAULT);
                    //insert data ke database
                    $query = "INSERT INTO customer (CUS_ID, CUS_NAMA, CUS_ALAMAT, CUS_EMAIL, CUS_PHONE, CUS_PASSWORD) VALUES ('$concat', '$name','$alamat','$email','$telp','$pass')";
                    $result   = mysqli_query($conn, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                    if ($result) {
                        header('Location: Data_Customer.php');
                    
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                }else{
                        $error =  'Username sudah terdaftar !!';
                }
            }else{
                $validate = 'Password tidak sama !!';
            }
            
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
    //fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_email($email,$conn){
        $em = mysqli_real_escape_string($conn, $email);
        $query = "SELECT * FROM customer WHERE CUS_EMAIL = '$em'";
        if( $result = mysqli_query($conn, $query) ) return mysqli_num_rows($result);
    }
?>

