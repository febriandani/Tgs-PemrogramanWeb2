<?php 
 
include '../config.php';
$id = $_GET['id'];

if(mysqli_query($conn, "DELETE FROM kategori_produk WHERE KP_Kode in('$id')")){
    header("location:./Category_Product.php?alert=berhasil");
} else {
    echo "error";
}
?>