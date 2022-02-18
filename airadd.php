<?php

$servername = 'localhost';
     $user = 'root';
     $password = '';
     $dbname = 'datadb';
 
     $conn = mysqli_connect($servername, $user, $password, $dbname);

$output="";
    $query = "SELECT * FROM airtimeprice WHERE ref_id ='".$_POST['AirtimeID']."' ORDER BY airtime_type";
    $result = mysqli_query($conn,$query);
    $output .='<option value="" disabled select>Select Data</option>';
    while($row = mysqli_fetch_array($result)){
        $output .= '<option value="'.$row["id"].'">'.$row["airtime_type"]. ' ₦'. $row["airtime_price"].'</option>';
    }

echo $output;
?>