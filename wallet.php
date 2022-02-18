<?php 
    require "./auth.php";
    require "./server.php";


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
                    <a class="nav-link" id="linkup" href="airtime.php" ><i class="fas fa-money-bill-wave" style='font-size:25px; color:#4621ad'></i> REFERALLS</a>
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
        
        
    
    <section class="py-4 container">
        
        <div>
           
        </div>
    </section>
   

    <section class=" ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                       
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 shadow-lg">
                       

                       <div class="card bg-light  mt-2">
                       <div class="card-body  shadow p-4  ">
                       <div class="card-bottom">
                               <br>
                               <h4  class="p-2">Wallet Top-up<span>Amount</span></h4>
                            </div>
                            <div class="card-bottom">
                               <form class="form-group" action="initialize.php" method="POST">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basiaddon1">₦</span>
                                        </div>
                                        <input type="text" class="form-control" name="amount" placeholder="Amount" aria-label="Amount" aria-describedby="basiaddon1">
                                    </div>
                                    <input type="submit" value="PAY" name="pay" style="color:#fff ; font-family:600" class="btn card-btn1">
                               </form>
                       </div>
                   </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                       
                    </div>
                </div>
                <hr>
                <p>
  

            
           
</section>
<section class="p-3 mt-4" style="background-color: #e3e3e3;">
        <div class="container">
            <p>copyright 2020 &copy;. All right reserved.</p>
        </div>
    </section>
    </section>


    <!-- <footer class=" " style="background: #e3e3e3;">
        <div class="container">
            <p>copyright 2020 &copy;. All right reserved.</p>
        </div>
    </footer>
    -->

    
  <!-- A2C Calculator-->
  <script src="./assets/js/a2ccalculator.js"></script>

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