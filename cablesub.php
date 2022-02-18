<?php

$servername = 'localhost';
     $user = 'root';
     $password = '';
     $dbname = 'datadb';
 
     $conn = mysqli_connect($servername, $user, $password, $dbname);

$output="";
    $query = "SELECT * FROM cableprice WHERE ref_id ='".$_POST['CableID']."' ORDER BY cable_type";
    $result = mysqli_query($conn,$query);
    $output .='<option value="" disabled select>Select Data</option>';
    while($row = mysqli_fetch_array($result)){
        $output .= '<option value="'.$row["id"].'">'.$row["cable_type"]. ' ₦'. $row["cable_price"].'</option>';
    }

echo $output;
?>