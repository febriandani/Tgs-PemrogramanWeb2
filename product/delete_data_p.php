<?php 
 
include '../config.php';
$id = $_GET['id'];

if(mysqli_query($conn, "DELETE FROM produk WHERE P_Kode in('$id')")){
    header("location:./Data_Product.php?alert=berhasil");
} else {
    echo "error";
}
?>