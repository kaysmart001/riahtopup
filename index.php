<?php 
    session_start();

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
       <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/Riah topup logo.png"  width="200px" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">    
                                        <li class="active"><a href="index.html"> Home</a></li>
                                      
                                        <li><a href="#services">Services</a></li>
                                        <li><a href="<?php if (isset($_SESSION['user']) && ($_SESSION['user']) == true){ echo 'dashboard.php';} else{ echo 'login.php';}?>">My Account</a></li>
                                        <li><a href="#contact">Contact</a></li>
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

    <main>

        <!-- Slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <h4 data-animation="fadeInUp" data-delay=".5s">Welcome To Riah Top-up</h4>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Your Affordable and Reliable<br>Topup Platform</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">Buy data plans at cheaper rates and your cable Tv subscription  at good rates.</p>
                                    <!-- Slider btn -->
                                   <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="login.php" class="btn radius-btn">Get Started</a>
                                        <!-- Video Btn -->
                                       
                                   </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="assets/img/hero/hero_right.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <h4 data-animation="fadeInUp" data-delay=".5s">Welcome To Riah Top-up</h4>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Your Affordable and Reliable<br>Topup Platform</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">Buy data plans at cheaper rates and your cable Tv subscription  at good rates.</p>
                                    <!-- Slider btn -->
                                   <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="industries.html" class="btn radius-btn">Get Started</a>
                                        <!-- Video Btn -->
                                       
                                   </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="assets/img/hero/hero_right.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- Slider Area End -->
        <!-- Best Features Start -->
       
        <!-- Best Features End -->
        <!-- Services Area Start -->
    
        <!-- Services Area End -->
        <!-- Applic App Start -->
        <div class="applic-apps section-padding2">
            <div class="container-fluid">
                <div class="row">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3>OUR DATA PLANS </h3>
                            <p>Leverage on our cheap data offering for all networks and do more in every area of your life. Whether you are a casual surfer or a heavy data addict, Riah Topup have an affordable data plan for you.</p>
                         
                            <h4 style="font-size: 22px; font-family: 'Courier New', Courier, monospace; font-weight: 600;" >ALL AIRTIME PURCHASE (2% DISCOUNT)</h4>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class="app-active owl-carousel"> 
                            <div class="single-cases-img">
                                <img src="assets/img/gallery/mtn.png" alt="">
                            </div>
                            <div class="single-cases-img">
                                <img src="assets/img/gallery/glo.png" alt="">
                            </div>
                            <div class="single-cases-img">
                                <img src="assets/img/gallery/airtel.png" alt="">
                            </div>
                            <div class="single-cases-img">
                                <img src="assets/img/gallery/9mobile.png" alt="">
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Applic App End -->
        <!-- Best Pricing Start -->
        <section id="services" class="best-pricing pricing-padding" data-background="assets/img/gallery/best_pricingbg.jpg">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-tittle section-tittle2 text-center">
                            <h2>Our Service</h2>
                        </div>
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
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <span><i class="fa fas-coin"></i></span>
                                <h4 >GOTV<span>  Plan</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>GOTV</li>
                                    <li>GOTV MAX &nbsp;&nbsp;&nbsp;3600</li>
                                    <li>GOTV JOLLI &nbsp;&nbsp;&nbsp;	2460</li>
                                    <li>GOTV JINJA 	&nbsp;&nbsp;&nbsp;	1640</li>
                                    <li> GOTV SMALLIE &nbsp;&nbsp;&nbsp;	800	</li>
                                   
                                </ul>
                                <a href="login.php" class="btn card-btn1">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-card  text-center mb-30">
                            <div class="card-top">
                                <span> </span>
                                <h4 >DSTV<span>Plan</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>DSTV PADI&nbsp;&nbsp;&nbsp;	1850 </li>
                                    <li> DSTV YANGA &nbsp;&nbsp;&nbsp;		2565</li>
                                    <li>DSTV CONFAM&nbsp;&nbsp;&nbsp;	4615	</li>
                                    <li>DSTV COMPACT&nbsp;&nbsp;&nbsp;	7900	</li>
                                    <li> DSTV PREMIUM&nbsp;&nbsp;&nbsp;	18400	</li>
                                    <li> DSTV ASIA &nbsp;&nbsp;&nbsp;		6,200	</li>
                                </ul>
                                <a href="login.php" class="btn card-btn1">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-card shadow text-center mb-30">
                            <div class="card-top">
                                <span> </span>
                                <h4>STARTIMES<span>Plan</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>NOVA&nbsp;&nbsp;&nbsp;900 </li>
                                    <li>BASIC &nbsp;&nbsp;&nbsp;1700 </li>
                                    <li>SMART&nbsp;&nbsp;&nbsp;2,200 </li>
                                    <li>CLASSIC &nbsp;&nbsp;&nbsp;2500 </li>
                                    <li>SUPER &nbsp;&nbsp;&nbsp;4200</li>
                                </ul>
                                <a href="login.php" class="btn card-btn1">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                    
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card shadow  text-center mb-30">
                            <div class="card-top">
                                <span> </span>
                                <h4 >PHCN<span>Plan</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                        
                                    <li>DSTV PADI&nbsp;&nbsp;&nbsp;₦1850 </li>
                                    <li> DSTV YANGA &nbsp;&nbsp;&nbsp;₦2565</li>
                                    <li>DSTV CONFAM&nbsp;&nbsp;&nbsp;₦4615	</li>
                                    <li>DSTV COMPACT&nbsp;&nbsp;&nbsp;₦7900	</li>
                                    <li> DSTV PREMIUM&nbsp;&nbsp;&nbsp;₦18400	</li>
                                    <li> DSTV ASIA &nbsp;&nbsp;&nbsp;₦6,200	</li>
                                </ul>
                                <a href="login.php" class="btn card-btn1">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-card shadow text-center mb-30">
                            <div class="card-top">
                                <span><i class="fa fas-coin"></i></span>
                                <h4 >AIRTIME <span>TO CASH</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>GOTV</li>
                                    <li>GOTV MAX &nbsp;&nbsp;&nbsp;₦3600</li>
                                    <li>GOTV JOLLI &nbsp;&nbsp;&nbsp;	₦2460</li>
                                    <li>GOTV JINJA 	&nbsp;&nbsp;&nbsp;	₦1640</li>
                                    <li> GOTV SMALLIE &nbsp;&nbsp;&nbsp;	₦800	</li>
                                   
                                </ul>
                                <a href="login.php" class="btn card-btn1">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing Card End -->
        <!-- Our Customer Start -->
                 
        <!-- Our Customer End -->
        <!-- Available App  Start-->
       
        <!-- Available App End-->
        <!-- Say Something Start -->
      
        <!-- Say Something End -->
     
    </main>
    <section  id="contact" class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
               

            </div>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span> <a href="https://www.instagram.com/isparkafrica"><img src="img/001-instagram.svg" alt="" width="25px"></a> </span>&nbsp;&nbsp;
                        <div class="media-body">
                            <h3>support@RiahTopup.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span> <a href="https://wa.me/+2348130335681"><img src="img/002-whatsapp.svg" alt="" width="25px"></a></span>&nbsp;&nbsp;
                        <div class="media-body">
                            <h3>+243 8053 565 2365</h3>
                            <p>Mon to Sun 24/7</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span> <a href="https://www.twitter.com/isparkafrica"><img src="img/013-twitter-1.png" alt="" width="25px"></a></span>&nbsp;&nbsp;
                        <div class="media-body">
                            <h3>support@RiahTopup.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span> <a href="https://www.facebook.com/isparkafrica"><img src="img/023-facebook-3.svg" alt="" width="25px"></a></span>&nbsp;&nbsp;
                        <div class="media-body">
                            <h3>support@RiahTopup.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ================ contact section end ================= -->

<footer>

    <!-- Footer Start-->
   <div  class="footer-main">
     <div class="footer-area footer-padding">
         <div class="container">
             <div class="row  justify-content-between">
                 <div class="col-lg-3 col-md-4 col-sm-8">
                      <div class="single-footer-caption mb-30">
                           <!-- logo -->
                          <div class="footer-logo">
                              <a href="index.html"><img src="assets/img/logo/Riah topup logo.png" alt="" width="200px"></a>
                          </div>
                          <div class="footer-tittle">
                              <div class="footer-pera">
                                  <p class="info1">Leverage on our cheap data offering for all networks and do more in every area of your life.</p>
                             </div>
                          </div>
                      </div>
                 </div>
                 <div class="col-lg-2 col-md-4 col-sm-5">
                     <div class="single-footer-caption mb-50">
                         <div class="footer-tittle">
                             <h4>Quick Links</h4>
                             <ul>
                                 <li><a href="#">About</a></li>
                                 <li><a href="#">Features</a></li>
                                 <li><a href="#">Pricing</a></li>
                                 <li><a href="#">Download</a></li>
                                 <li><a href="#">Reviews</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-2 col-md-4 col-sm-7">
                     <div class="single-footer-caption mb-50">
                         <div class="footer-tittle">
                             <h4>Support</h4>
                             <ul>
                                 <li><a href="#">Report a bug</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Terms & Conditions</a></li>
                                 <li><a href="#">Sitemap</a></li>
                                 <li><a href="#">FAQs</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-8">
                     <div class="single-footer-caption mb-50">
                         <div class="footer-tittle">
                             <h4>Newsletter</h4>
                             <div class="footer-pera footer-pera2">
                              <p>Heaven fruitful doesn't over lesser in days. Appear </p>
                          </div>
                          <!-- Form -->
                          <div class="footer-form">
                              <div id="mc_embed_signup">
                                  <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                      <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                      <div class="form-icon">
                                          <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="assets/img/shape/form_icon.png" alt=""></button>
                                      </div>
                                      <div class="mt-10 info"></div>
                                  </form>
                              </div>
                          </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Copy-Right -->
             <div class="row align-items-center">
                 <div class="col-xl-12 ">
                     <div class="footer-copy-right">
                         <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Designed <i class="ti-heart" aria-hidden="true"></i> by <a href="https://isparkafrica.ng" target="_blank">iSparkAfrica</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
   </div>
    <!-- Footer End-->

</footer>

<!-- JS here -->

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