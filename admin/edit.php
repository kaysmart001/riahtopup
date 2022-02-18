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

	$plan_type =  testInput($_POST["plan_type"]);
	$price =  testInput($_POST["price"]);
	

	$sql = "INSERT INTO dataprice (ref_id,data_type,price )
	VALUES ('$id', '$plan_type','$price')";
	
	if (mysqli_query($conn, $sql)) {
		
	header("location:data_plan.php");
	echo "<script>alert('Data Plan Successfully Add');</script>";

	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
}
	
  
	
  
?>    
		  