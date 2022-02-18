<?php require_once "server.php";
if (isset($_GET['ref'])){
    $_SESSION['ref'] = $_GET['ref'];
    if($_SESSION["user"] != "user"){
        header('location: login.php');
    }
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
<style>
 
</style>
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

    <header>
        <!-- Header Start -->
       <div class="header-area ">
            <div class="main-header header-sticky">
                <div class="container">
              
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/favicon.svg "  width="100px" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">    
                                    <li class="active"><a href="index.php" > Home</a></li>
                                      
                                   
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
        <div class="pricing-card-area ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                       
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 shadow-lg">
                        <div class="single-card  text-center mb-30">
                           
                            <div class="card-bottom">
                            <h4 style="font-size:25px; padding-bottom:10px;">Create an Account!</h4>
                            <p class="text-danger"><b><?php echo $registerErr; ?></b></p>
                            <form class="form-group " action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <input class="form-control" style="padding:25px 10px 25px 10px;" type="text" name="userName" id="" placeholder="Enter Name" required><span class="text-danger">* <b><?php echo $userNameErr; ?></b></span><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="email"  style="padding:25px 10px 25px 10px;" name="userEmail" id="" placeholder="Enter Email" required><span class="text-danger">* <b><?php echo $userEmailErr; ?></b></span> <br>
                                        <input class="form-control" type="tel"  style="padding:25px 10px 25px 10px;" name="userPhone" id="" placeholder="Enter Phone eg. +2348088367337"><span class="text-danger">* <b><?php echo $userPhoneErr; ?></b></span> <br>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="password"  style="padding:25px 10px 25px 10px;" name="userPass1" id="" placeholder="Enter Password" required><span class="text-danger">* <b><?php echo $userPassErr; ?></b></span> <br>
                                        <input class="form-control" type="password"  style="padding:25px 10px 25px 10px;" name="userPass2" id="" placeholder="Enter Comfirm Password" required><br>
                                    </div>
                                </div>
                                <input class="form-control" type="text"  style="padding:25px 10px 25px 10px;" name="ref" id="" placeholder="Who Refer you? (Optional)"value=""><br>
                                <br>
                                <input type="submit" style="color:#fff ; font-family: 'Courier New', Courier, monospace; font-family:600" value="Register Account" class="btn card-btn1" name="register" id="">
                                    <br>
                                    <p class="text-center">
                                <!-- <a href="forgetpassword.php" style="color:#b626bf; ">Forget Password?</a><br> -->
                                <a href="login.php"  style="color:#b626bf;">Already have an account?Login?</a>
                                </p>
                            </form>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                       
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