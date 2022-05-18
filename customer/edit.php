<!DOCTYPE html>
<html>

<?php 
include '../config.php';

?>
 
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

</head>

<body>

    <div class="wrapper">
    
  <nav id="sidebar">
    <div class="sidebar-header">
        <h3>Menu | Edit Data Customer</h3>
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
            
            <h2>Edit Data Customer</h2>
                <div class="container">
                <?php 
	include '../config.php';
	$id = $_GET['id'];
	$query_mysqli = mysqli_query($conn, "SELECT * FROM customer WHERE CUS_ID='$id'");
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
	?>
	<form action="update.php" method="POST">	
        <div class="form-group">
            <label for="name">ID</label>
            <input type="text" class="form-control" disabled name="cus_id" value="<?php echo $data['CUS_ID'] ?>">
        </div>	
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $data['CUS_NAMA'] ?>">
        </div>	
        <div class="form-group">
            <label for="name">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $data['CUS_ALAMAT'] ?>">
        </div>	
        <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="phone" class="form-control" value="<?php echo $data['CUS_PHONE'] ?>">
        </div>	
        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $data['CUS_EMAIL'] ?>">
            <?php }?>
            </div>
            <button type="submit" class="btn btn-success">UPDATE</button>
	</form>
       
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
</body>

</html>