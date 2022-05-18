<?php 
include '../config.php';

$kode = $_POST['p_kode'];
$nama = $_POST['p_nama'];

	if(mysqli_query($conn, "INSERT INTO kategori_produk VALUES('$kode','$nama')")){
		header("location:Category_Product.php?alert=berhasil");
	}
	
?>