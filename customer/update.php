<?php 
        include '../config.php';

            $id2 =  $_POST['cus_id'];
            $nama =  $_POST['nama'];
            $alamat =  $_POST['alamat'];
            $phone =  $_POST['phone'];
            $email =  $_POST['email'];

      		//query update data ke dalam database berdasarkan ID
			$query = "UPDATE customer SET CUS_NAMA = '$nama', CUS_ALAMAT = '$alamat', CUS_PHONE = '$phone', CUS_EMAIL = '$email' WHERE CUS_ID = '$id2'";


          //kondisi pengecekan apakah data berhasil diupdate atau tidak
			if($conn->query($query)) {
				//redirect ke halaman index.php 
				header("location: Data_Customer.php");
			} else {
				//pesan error gagal update data
				echo "Data Gagal Diupate!";
			}
        ?>