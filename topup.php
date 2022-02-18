<?php 
    require './auth.php';
    require_once "./server.php";


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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <br><br>
    <section class="body1">

<style>
    .btt{
    background: #4621ad;
    color: #fff;
    border-radius: 5px;
}
.btt:hover{
    background: #fd9c9c;
    color: #fff;
    box-shadow: 0 4px 8px 0 rgba(221, 16, 170, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   
}
</style>

<!-- <script>
    function databuy(){
            var d = document.getElementById('ddselect');
            var displaytxt = d.options['d.selectedIndex'].text;
             document.getElementById('textvalue').value= displaytxt;
    }
</script> -->


<!-- The Modal data -->
<div class="modal" id="datatopup">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        
        <h4 class="modal-title" style="font-size:25px; padding-bottom:10px;">Data Topup</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
     
                            <form class="form-group " action="">
                                    <div class="form-group pb-5">
                                    <select name="dd" class="form-control w-100" id="dd"  required >
                                   
                                   <option value="">Select</option>
                                   <?php

                                        require_once('dbconn.php');
                                        $query = "SELECT * FROM authors Order by id" ;
                                        $result = mysqli_query($conn, $query);
                                        while($row = mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?= $row['id'];?>"> <?= $row['plan_name'];?></option>
                                   <?php
                                    }
                                   ?>
                                    </select>
                                    </div>
                                    <div class="form-group">
                       <input type="text" class="form-control w-100" placeholder="Phone Number" required>
                        </select>
                        </div>
                     <div class="form-group" id="my-select">
                        
                     </div>
                                    

                                   
                                    <br><br>
                                   <button  name="buy" class="p-3  btt">Buy now</button>
                                      <br>
    
                               </form>

                             
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btt p-3" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal cable tv-->
<div class="modal" id="cabletv">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        
        <h4 class="modal-title" style="font-size:25px; padding-bottom:10px;">CABLE Topup</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    
      

      
    
     <!-- Modal body -->
     <div class="modal-body">
     
     <form class="form-group " action="">
             <div class="form-group pb-5">
             <select name="di" class="form-control w-100" id="di"  required >
            
            <option value="">Select</option>
            <?php

                 require_once('dbconn.php');
                 $query = "SELECT * FROM cable Order by id" ;
                 $result = mysqli_query($conn, $query);
                 while($row = mysqli_fetch_array($result)){
             ?>
             <option value="<?= $row['id'];?>"> <?= $row['cable_name'];?></option>
            <?php
             }
            ?>
             </select>
             </div>
             <div class="form-group">
<input type="text" class="form-control w-100" placeholder="Card Number" required>
 </select>
 </div>
<div class="form-group" id="card-select">
 
</div>
             

            
             <br><br>
            <button  name="buy" class="p-3  btt">Buy now</button>
               <br>

        </form>

      
</div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btt p-3" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<!-- The Modal cable tv-->
<div class="modal" id="buyairtime">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
      <h4 style="font-size:25px; padding-bottom:10px;">AIRTIME</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
           <!-- Modal body -->
     <div class="modal-body">
     
     <form class="form-group " action="">
             <div class="form-group pb-5">
             <select name="dp" class="form-control w-100" id="dp"  required >
            
            <option value="">Select</option>
            <?php

                 require_once('dbconn.php');
                 $query = "SELECT * FROM airtime Order by id" ;
                 $result = mysqli_query($conn, $query);
                 while($row = mysqli_fetch_array($result)){
             ?>
             <option value="<?= $row['id'];?>"> <?= $row['airtime_name'];?></option>
            <?php
             }
            ?>
             </select>
             </div>
             <div class="form-group">
<input type="text" class="form-control w-100" placeholder="Card Number" required>
 </select>
 </div>
<div class="form-group" id="air-select">
 
</div>
             

            
             <br><br>
            <button  name="buy" class="p-3  btt">Buy now</button>
               <br>

        </form>

      
</div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btt p-3" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
        <div class="clearfix container">
            <p class="float-right"><span><a href="index.php" class="bttn p-3">Home</a></span></p>
            <p class="float-left text1 ">Topup</p>
        </div><br>
        <div class="container">
        
            
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4 " >
                <div class="card bg-light  mt-2">
                <div class="card-top  shadow p-4 float-center ">
                   <h4>DATA TOPUP</h4>
                </div>
                        <div class="card-body  shadow p-4  ">
                            <div class=" row ">
                            <div class="col-xs-6 col-md-6 p-2">
                             <img  src="img/glo.png" alt="" style="width:100px;">
                            </div>
                            <div class="col-xs-6  col-md-6 p-2">
                            <img  src="img/mtn.png" alt="" style="width:100px;">
                            </div>
                            <div class="col-xs-6  col-md-6 p-2">
                            <img  src="img/air.png" alt="" style="width:100px;">
                            </div>
                            <div class="col-xs-6  col-md-6 p-2">
                            <img  src="img/mob.png" alt="" style="width:100px;">
                            </div>
                            </div><br>
                            <button class="bttn p-3 shadow-lg " data-toggle="modal" data-target="#datatopup">Top Up Data</button>
                        
                        </div>
                    </div>

                </div>
                <div class="col-md-4 " >
                <div class="card bg-light  mt-2">
                <div class="card-top  shadow p-4 float-center ">
                   <h4>CABLE TV</h4>
                </div>
                        <div class="card-body  shadow p-4  ">
                            <div class=" row ">
                                <div class="col-xs-6 col-md-6 p-2">
                                    <img  src="img/dst.png" alt="" style="width:100px;">
                                </div>
                                <div class="col-xs-6  col-md-6 p-2">
                                    <img  src="img/gotv.png" alt="" style="width:100px;">
                                </div>
                                <div class="col-xs-6  col-md-6 p-2">
                                    <img  src="img/phcn.png" alt="" style="width:100px;">
                                </div>
                                <div class="col-xs-6  col-md-6 p-2">
                                    <img  src="img/sar.png" alt="" style="width:130px;">
                                </div>
                            </div><br>
                            <button class="bttn p-3 shadow-lg " data-toggle="modal" data-target="#cabletv">Buy Sub</button>
                        
                        </div>
                    </div>
            </div>
                <div class="col-md-4">
                <div class="card bg-light  mt-2">
                <div class="card-top  shadow p-4 float-center ">
                   <h4>BUY AIRTIME</h4>
                </div>
                        <div class="card-body  shadow p-4  ">
                        <div class=" row ">
                            <div class="col-xs-6 col-md-6 p-2">
                             <img  src="img/glo.png" alt="" style="width:100px;">
                            </div>
                            <div class="col-xs-6  col-md-6 p-2">
                            <img  src="img/mtn.png" alt="" style="width:100px;">
                            </div>
                            <div class="col-xs-6  col-md-6 p-2">
                            <img  src="img/air.png" alt="" style="width:100px;">
                            </div>
                            <div class="col-xs-6  col-md-6 p-2">
                            <img  src="img/mob.png" alt="" style="width:100px;">
                            </div>
                            </div><br>
                            <button class="bttn p-3 shadow-lg " data-toggle="modal" data-target="#buyairtime">Buy Airtime</button>
                        
                        </div>
                    </div>
        </div>
    </section>
    <br>
    
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

    <script type="text/javascript">
                 $(document).ready(function(){
                     $("#dd").change(function(){
                        var dd_id=$(this).val();
                        $.ajax({
                            url: "ajaxdata.php",
                            method: "POST",
                            data: {dataID:dd_id},
                            success:function(data){
                                $("#my-select").html(
                                    `<select name="dpo" class="form-control w-100" id="dpo" required>
                                    ${data}
                                    </select>
                                    `
                                );
                            }
                        });
                     });
                 });                  
      </script>

<script type="text/javascript">
                 $(document).ready(function(){
                     $("#di").change(function(){
                        var de_id=$(this).val();
                        $.ajax({
                            url: "cablesub.php",
                            method: "POST",
                            data: {CableID:de_id},
                            success:function(data){
                                $("#card-select").html(
                                    `<select name="dpi" class="form-control w-100" id="dpi" required>
                                    ${data}
                                    </select>
                                    `
                                );
                            }
                        });
                     });
                 });                  
      </script>
      <script type="text/javascript">
                 $(document).ready(function(){
                     $("#dp").change(function(){
                        var dp_id=$(this).val();
                        $.ajax({
                            url: "airadd.php",
                            method: "POST",
                            data: {AirtimeID:dp_id},
                            success:function(data){
                                $("#air-select").html(
                                    `<select name="dp" class="form-control w-100" id="dp" required>
                                    ${data}
                                    </select>
                                    `
                                );
                            }
                        });
                     });
                 });                  
      </script>
    
</body>

</html>