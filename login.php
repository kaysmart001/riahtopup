<?php 

 if(isset($_SESSION['user']) && ($_SESSION['user']) == true){
     header ('Location: dashboard.php');
     exit();
 }
 else{
  
 require_once './server.php';
 }
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
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
          
   </head>

   <body>
       
   <style>
       #logotop{
                top:40px;
                border:2px solid transparent;
            background-image:linear-gradient(#701cea,#f42a94),radial-gradient(circle at top left,#fd00da,#42455a);
                border-radius:20px;
                background-origin:border-box;
                background-clip: content-box,border-box;

       }
     
   </style>
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

    <header>
        <!-- Header Start -->
       <div class="header-area  ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/favicon.svg"  width="100px" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav class="nav">
                                    <ul id="navigation">    
                                    <li class=""><a href="index.php" > Home</a></li>
                                      
                                      
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    

<section id="services" class="best-pricing pricing-padding" data-background="assets/img/gallery/best_pricingbg.jpg">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-8">
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- Best Pricing End -->
        <!-- Pricing Card Start -->
        <div class="pricing-card-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                       
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 shadow-lg">
                        <div class="single-card  text-center mb-30">
                            <div class="card-top">
                                <span> </span>
                                <h4 >Welcome <span>Back!</span></h4>
                            </div>
                            <div class="card-bottom">
                            <p class="text-danger"><b><?php echo $loginErr; ?></b></p>
                                <form class="form-group" action="server.php" method="POST">
                                    <input class="form-control" style="padding:25px 10px 25px 10px;" type="text" name="userEmail" id="" placeholder="Enter Email"><br>
                                    <input class="form-control" type="password"  style="padding:25px 10px 25px 10px;" name="userPass" id="" placeholder="Enter Password"><br>
                                    <br>
                                    <input type="submit" style="color:#fff ; font-family: 'Courier New', Courier, monospace; font-family:600" value="Login Account" class="btn card-btn1" name="login" id="login">
                                        <br><br>
                                        <p class="text-center">
                                    <!-- <a  href="forgetpassword.php" style="color:#b626bf; ">forget password</a><br> -->
                                    <a href="register.php"  style="font-weight:600;color:#b626bf;">Create an Account</a>
                                    </p>
                                </form>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                       
                    </div>
                </div>
            </div>
        </div>
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