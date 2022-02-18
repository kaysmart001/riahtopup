<?php 
    require_once "../server.php";

    if($_SESSION["admin"] != "admin"){
        header('location: index.php');
    }

?>

<?php
require('db.php');



?>

<?php

//Change password

if(isset($_POST['add'])){
	$id = $_POST['id'];

	$cable_type =  testInput($_POST["plan_type"]);
	$price =  testInput($_POST["price"]);
	

	$sql = "INSERT INTO cableprice (ref_id,cable_type,cable_price )
	VALUES ('$id', '$cable_type','$price')";
	
	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Cable Plan Successfully Add');</script>";	
	header("location:cable.php");
	

	
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
}
	
  
	
  
?>    
		  