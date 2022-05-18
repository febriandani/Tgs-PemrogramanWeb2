<?php 
 
include '../config.php';
$id = $_GET['id'];

if(mysqli_query($conn, "DELETE FROM customer WHERE CUS_ID in('$id')")){
    header("location:./Data_Customer.php?alert=berhasil");
} else {
    echo "error";
}
?>