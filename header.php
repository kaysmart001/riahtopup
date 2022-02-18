<?php
    require './auth.php';
    require_once "./server.php";
    if(empty($_SESSION['user'])){
        header('location: login.php');
    }
    $myEmail = $_SESSION['user'];
    $source = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM wallet WHERE userEmail = '$myEmail'"));

?>

<div class="white">
        <section id="" class="py-4 container" >
            <div>
                <!-- Section Tittle -->
                <div class="clearfix " >
                    <div class="float-left">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.svg" alt="" style="width:150px;"></a>
                        </div>
                    </div>
                    <div class="float-right " style=' color:#4621ad'><i  class='fas fa-wallet ' style='font-size:25px; color:#4621ad'></i> ₦<?php echo $source['balance'];?> &nbsp; &nbsp; &nbsp; <img src="img/default-user-avatar.png" alt="" style="width:40px" ><span>
                    <span class="dropdown">
                   
            <a  class=" dropdown-toggle" data-toggle="dropdown">


              <?php echo $_SESSION['user']; ?> &nbsp;
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.php"><i  class='fas fa-user ' style='font-size:15px; color:#4621ad'></i>&nbsp;Profile</a>
                <a class="dropdown-item" href="logout.php"><i  class='fas fa-wallet ' style='font-size:15px; color:#4621ad'></i>&nbsp;Sign Out</a>
              
            </div>
            </span> 
                    
     
                    </span>
 
                     </div>
                </div>
            </div>
        </section>
    </div>