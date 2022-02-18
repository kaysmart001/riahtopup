<?php 
    require_once "../server.php";
    
    
    if($_SESSION["admin"] != "admin"){
        header('location: index.php');
    }

?>
<?php 



$result = $conn->query("SELECT * FROM admintable");
$customer = $result->fetch_all(MYSQLI_ASSOC);

?>
<?php

    //Change password

    if(isset($_POST['changePass'])){
        $email =  testInput($_POST["newEmail"]);
        $password =  testInput($_POST["newPassword"]);
        $conPassword = testInput($_POST["confirmPassword"]);
       
        if($password !== $conPassword ){
            $loginErr = "Password Mismatch";
        }else{
            $HasspASS = md5($password);
            $sql = "UPDATE admintable SET  adminEmail='$email', adminPass='$HasspASS' WHERE id = 1 ";
            if ($conn->query($sql) === TRUE) {
              ?>
                <script>alert("Password  Change Successfully");</script>
              <?php
               
                //$loginErr = "Password  Change Successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
          
        }
      
     }
      
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Raish Topup Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="dashboard.php">Raish Topup</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
               
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Raish Topup
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                          
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Change Price
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                            
                                <a class="nav-link" href="data_plan.php">Data Pan</a>
                                    <a class="nav-link" href="cable.php">Cable Plan</a>
                                    <a class="nav-link" href="airtime.php">Airtime Plan</a>
                                    <a class="nav-link" href="details.php">Details</a>
                                </nav>
                            </div>
                          
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Raish Topup
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                       
                       <div class="row">
                            <div class="col-md-4">
                            
                            </div>
                            <div class="col-md-4">
                            <div class="card-bottom">
                           
                           <form class="form-group " action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                               <p class="text-danger"><b><?php echo $loginErr; ?></b></p>
                               <?php
                     
                                   
                     foreach($customer as $customer) :?>
                               <input class="form-control" style="padding:25px 10px 25px 10px;" value="<?= $customer['adminEmail']; ?>" placeholder="Current Email" type="email" name="email" id="" readonly><br>
                               <input class="form-control" type="password" placeholder="Current Password" value="<?= $customer['adminPass']; ?>" style="padding:25px 10px 25px 10px;" name="pass" id="" readonly><br>
                               
                               <input class="form-control" type="email" placeholder="New Email" style="padding:25px 10px 25px 10px;" name="newEmail" id=""  rreadonly><br>
                               

                                   <input class="form-control" type="password" placeholder="New Password"  style="padding:25px 10px 25px 10px;" name="newPassword" id=""  required><br>
                                   <input class="form-control" type="password" placeholder="Confirm Password" style="padding:25px 10px 25px 10px;" name="confirmPassword" id="" placeholder="Enter New Password"  required><br>
                               
                               <input  name="changePass" type="submit"  style="color:#fff ; font-family: 'Courier New', Courier, monospace; font-family:600" value="Submit" class=" btn btn-primary form-control"  >
                                  <br>
                                  <?php endforeach; ?>   
                           </form>
                           
                        </div>
                            </div>
                            <div class="col-md-4">
                            
                            </div>
                       </div>
                      
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="./assets/js/jquery-1.12.4.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>