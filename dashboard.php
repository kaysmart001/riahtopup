<?php
    require './auth.php';
    require_once "./server.php";
    /*if(empty($_SESSION['user'])){
        header('location: login.php');
    }*/
    $myEmail = $_SESSION['user'];
    $source = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM wallet WHERE userEmail = '$myEmail'"));

?>

<?php 

$servername = "sql105.epizy.com";
$username = "epiz_33070717";
$password = "WBtcNlYDj3Y5qkD";
$dbname = "epiz_33070717_vtu_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 $result = $conn->query("SELECT * FROM transactions WHERE email ='$myEmail' ");
 $customer = $result->fetch_all(MYSQLI_ASSOC);

?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Riah Topup</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/font-awesome.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="css/style.css">
   </head>

   <body>
     
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/favicon.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    

<section >
  <?php
  include_once('header.php');
  ?>
    <div class="headtop">
        <section class="container justify-content-center">
            <nav class="navbar navbar-expand-md navbar-light p-0 " id="navs" >

            <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse   " id="collapsibleNavbar">
                    <ul class="navbar-nav   w-100"> 


                
                    <li class="nav-item ">
                    <a class="nav-link active" href="dashboard.php" id="linkup"> <i class="fas fa-home" style='font-size:25px; color:#4621ad'></i> DASHBOARD </a>
                    </li>
                    
                
                    <li class="nav-item " >
                        <a class="nav-link" id="linkup" href="airtime.php" ><i class="fas fa-money-bill-wave" style='font-size:25px; color:#4621ad'></i> AIRTIME TO CASH</a>
                    </li>
                    <li class="nav-item " >
                        <a class="nav-link " id="linkup" href="airtime.php" ><i class="fas fa-money-bill-wave" style='font-size:25px; color:#4621ad'></i> REFERALLS</a>
                    </li>
                    
                    <li class="nav-item " >
                        <a class="nav-link " id="linkup"  href="wallet.php"><i class="fa fa-briefcase" style='font-size:25px; color:#4621ad'></i> WALLET</a>
                    </li>
                    
                    <li class="nav-item " >
                        <a class="nav-link " id="linkup" href="profile.php"  ><i class="fa fa-user" style='font-size:25px; color:#4621ad'></i> PROFILE</a>
                    </li>
                
                
        
                    </ul>
                </div>
            </nav>
   
        </section>
  
    </div>
    <div class="container mt-3">
    
    <?php
  include_once('carousel.php');
  ?>
    </div>
    <br><br>
    
    <section class="body1">
        <div class="clearfix container">
            <p class="float-right"><span><a href="index.php" class="bttn p-3">Home</a></span></p>
            <p class="float-left text1 ">DASHBOARD</p>
        </div><br>
        <div class="container">
        
            <a href="topup.php" class="bttn p-3">Top Up Data</a>
            <a href="wallet.php" class="p-3 bttn1">Fund Wallet</a>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6 " >
        
                    <div class="card bg-light  mt-2">
                        <div class="card-body  shadow p-4 ">
                            <p class="card-text float-left">WALLET BALLANCE
                            <br> <span>₦<?php echo $source['balance'];?></span></p>
                            <i  class='fas fa-wallet float-right' style='font-size:25px; color:#4621ad'></i>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card bg-light  mt-2">
                        <div class="card-body  shadow p-4  ">
                            <p class="card-text float-left">Total Transactions
                            <br> <span>₦0 </span></p>
                            <i  class='fa fas-line-chart float-right' style='font-size:25px; color:#4621ad'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="py-4 mb-5 container ">
        <div class="clearfix">
            <div class="float-left  p-3 shadow-lg" style="width: 100%; border: 1px solid #e3e3e3;">
                <p> <b  style="color:#4621ad">Recent Transactions</b> </p>

                
                <table class="table table-hover" width="100%" style="text-align: center;  border:  1px solid #eee; ">
		    <thead>
		      <tr>
		      	 <th>Transaction ID</th>
				<th>Email</th>
				<th>Amount </th>
				
                <th>Date | time</th>
                
			
		      </tr>
		    </thead>
		    <tbody>

      
                    <?php
                     
                  
                    foreach($customer as $customer) :?>
						<tr>
							<td><?= $customer['ref_num']; ?></td>
							
							<td><?= $customer['email']; ?></td>
							<td> ₦<?= $customer['amount']; ?></td>
							<td><?= $customer['transact_date']; ?></td>
                           
                           

							
						</tr>
					<?php endforeach; ?>

					

		    </tbody>
		  </table>

            </div>
        </div>
    </section>
    <section class="p-3 mt-4" style="background-color: #e3e3e3;">
        <div class="container">
            <p>copyright 2020 &copy;. All right reserved.</p>
        </div>
    </section>
    </section>
 
   

    


        <!-- Best Pricing End -->
        <!-- Pricing Card Start -->
       
  <!-- All JS Custom Plugins Link Here here -->
  <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    
    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>
    <script src="./assets/fontawesome.js"></script>
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>

</html>
