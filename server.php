<?php
    session_start();
    //include "dbconn.php";
    //create connection
    $servername = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'datadb';

    $conn = mysqli_connect($servername, $user, $password, $dbname);

   
    if(!$conn){
        die ("Connect Error: ". mysqli_connect_error());
    } else {
            $userNameErr = $userEmailErr = $userPhoneErr = $userPassErr = $registerErr = $loginErr = $adminLoginErr = "";
            $userName = $userEmail = $userPhone = $message = $userPass = "";

            //validation
            function testInput($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }


            //register
            if(isset($_POST['register'])){
                $userName = testInput($_POST["userName"]);
                $userEmail = testInput($_POST["userEmail"]);
                $userPhone = testInput($_POST["userPhone"]);
                $referral = testInput($_POST['ref']);
                
                

                if (!preg_match("/^[a-zA-Z ]*$/", $userName)) {
                    $userNameErr = "Invalid Name";
                }

                if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                    $userEmailErr = "Invalid Email";
                }

                if (!filter_var($userPhone, FILTER_VALIDATE_INT)) {
                    $userPhoneErr = "Invalid Phone Number";
                }
                
                if($_POST["userPass1"] != $_POST["userPass2"]){
                    $userPassErr = "Password mismatch";
                }
                $sql = "SELECT * FROM users WHERE userEmail = '$userEmail'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) >= 1){
                    $registerErr = "user with the same email already exist";
                }
                

                if(empty($userNameErr) && empty($userEmailErr) && empty($userPhoneErr) && empty($userPassErr) && empty($registerErr)){
                    $code = uniqid('id',true) ;
                    $userPass = md5(testInput($_POST["userPass1"]));
                    $sql = "INSERT INTO users (userName, userEmail, userPhone, userPass, referral, unique_code) VALUES ('$userName', '$userEmail', '$userPhone', '$userPass','$referral' ,'$code')";
                    mysqli_query($conn, $sql);
                    mysqli_query($conn,"INSERT INTO wallet (userEmail, balance, ref_bal) VALUE ('$userEmail', '0.00', '0.00')");

                    $_SESSION["user"] = $userEmail;
                    header('location: dashboard.php');
                }
            }

            //login
            if(isset($_POST['login'])){
                $userEmail = testInput($_POST["userEmail"]);
                $userPass = md5(testInput($_POST["userPass"]));
                $sql = "SELECT * FROM users WHERE userEmail = '$userEmail' AND userPass = '$userPass'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) == 1){
                    $_SESSION['user'] = $userEmail;
                    header('location: dashboard.php');
                } else {
                    header('location: login.php');
                    $loginErr = "Wrong email/password combination";
                }
            }
            

            //adminLogin
            if(isset($_POST['adminLogin'])){
                $adminEmail = testInput($_POST["adminEmail"]);
                $adminPass = md5(testInput($_POST["adminPass"]));

                $sql = "SELECT * FROM admintable WHERE adminEmail = '$adminEmail' AND adminPass = '$adminPass'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) == 1){
                    $_SESSION["admin"] = "admin";
                    $_SESSION["success"] = "You are logged in";
                    header('location: dashboard.php');
                } else {
                    $adminLoginErr = "Wrong email/password combination";
                   
                }
            
            }
            
            //logout
            if(isset($_GET['logout'])){
                session_destroy();
                unset($_SESSION["username"]);
                header('location: ./login.php');
            }
            
        }

      //Change password

     
            
        
    //     $source = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users AND wallet where userEmail =$myEmail"));

    
    // class people{
    //     function me(){
    //         $conn = mysqli_connect(
    //             $host = 'localhost',
    //             $user = 'root',
    //             $password = '',
    //             $database = 'datadb'
    //         );
    //         $myEmail = $_SESSION['user'];
    //         $source = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users AND wallet where userEmail =$myEmail"));
    //         if($source){
    //             $me = $source;
    //             return $me['balance'];
    //         }
    //     }
    // }
    // $eyan = new people();
        
        

        
// function me(){
//     $servername = 'localhost';
//     $user = 'root';
//     $password = '';
//     $dbname = 'datadb';
//     $conn = mysqli_connect($servername, $user, $password, $dbname);
//     $sqlq = "SELECT * FROM users WHERE userEmail =". $_SESSION['user'];
//     $result = mysqli_fetch_array(mysqli_query($conn, $sqlq));
//     if ($result>0){
//         return $result;
//     }
    
// }
        

        
?>