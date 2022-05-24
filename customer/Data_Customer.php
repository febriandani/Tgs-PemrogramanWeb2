<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ShopFeb | Data Customer</title>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../style/style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>

    <div class="wrapper">
    
  <nav id="sidebar">
    <div class="sidebar-header">
        <h3>Menu | Data Customer</h3>
    </div>

    <ul class="list-unstyled components">
        <p>ShopFeb</p>
        <li>
            <a href="../index.php"> Home</a>
        </li>
         <!-- data product -->
         <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Customize Data Product</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="../product/Category_Product.php">Page Category Data Product</a>
                </li>
                <li>
                    <a href="../product/Data_Product.php">Page Data Product</a>
                </li>
            </ul>
        </li>
        <!-- data customer -->
        <li>
            <a href="#pageSubmenuCus" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Customize Data Customer</a>
            <ul class="collapse list-unstyled" id="pageSubmenuCus">
                <li>
                    <a href="./Data_Customer.php">Page Data Customer</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>


    <!-- <ul class="list-unstyled CTAs">
        <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
        </li>
    </ul> -->
</nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <!-- <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
            
            <section class="container-fluid mb-4">
            <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
            <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form class="form-container" action="./Customer_Tambah.php" method="POST">
                    <h4 class="text-center font-weight-bold"> Add Data Customer </h4>
                    <?php include "Customer_Tambah.php"; ?> <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
                   
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="name">Address</label>
                        <textarea class="form-control" id="name" name="alamat" placeholder="Masukkan Alamat"></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="name">Number Phone</label>
                        <input type="number" class="form-control" id="name" name="telp" placeholder="Masukkan Nomor Telepon"> 
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email Address</label>
                        <input type="email" class="form-control" id="InputEmail" name="email" aria-describeby="emailHelp" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password"> 
                        <i class="far fa-eye" id="Eye-pass" style="cursor: pointer;" onclick="myFunction()"></i>Show Password
                        <?php if($validate != '') {?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php }?>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Re-Password</label>
                        <input type="password" class="form-control" id="InputRePassword" name="repassword" placeholder="Re-Password">
                        <?php if($validate != '') {?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php }?>
                    </div>
                    <button type="submit" name="" class="btn btn-primary btn-block">Register</button>
                </form>
            </section>
            </section>
        </section>



                    <div class="line"></div>

                    <table class="table">
                        <th>NO</th>
                        <th>CUSTOMER ID</th>
                        <th>CUSTOMER NAMA</th>
                        <th>CUSTOMER ALAMAT</th>
                        <th>CUSTOMER PHONE</th>
                        <th>CUSTOMER EMAIL</th>
                        <th>ACTION</th>
      
                        <?php 
                        include '../config.php';

                        $batas = 5;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
        
                        $previous = $halaman - 1;
                        $next = $halaman + 1;
                        
                        $data = mysqli_query($conn,"select * from customer");
                        $jumlah_data = mysqli_num_rows($data);
                        $total_halaman = ceil($jumlah_data / $batas);
        
                        $data_customer = mysqli_query($conn,"select * from customer limit $halaman_awal, $batas");
                        $nomor = $halaman_awal+1;
                        while($d = mysqli_fetch_array($data_customer)){
                            ?>
                            <?php 
                            echo "<tr>";
                                echo "<td>".$nomor++."</td>";
                                echo "<td>".$d['CUS_ID']." </td>";
                                echo "<td>".$d['CUS_NAMA']." </td>";
                                echo "<td>".$d['CUS_ALAMAT']." </td>";
                                echo "<td>".$d['CUS_PHONE']." </td>";
                                echo "<td>".$d['CUS_EMAIL']." </td>";
                                echo "<td colspan='2'><a href='edit.php?id=$d[CUS_ID]' class='btn btn-success'>Edit</a> | <a href='delete.php?id=$d[CUS_ID]' class='btn btn-danger'>Delete</a></td></tr>";
                            ?>
                            </tr>
					<?php
				}
				?>
                    </table>
                    <nav>
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}  
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
                                        
                </div>

            
         

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>

        <script>
        function myFunction() {
            var x = document.getElementById("InputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            this.classList.toggle('fa-eye-slash');
            }

            // function eye(){
            //     var y = document.getElementById("Eye-pass");
            //     if ()
            // }
        </script>


</body>

</html>