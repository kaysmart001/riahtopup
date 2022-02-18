<?php

$servername = 'localhost';
     $user = 'root';
     $password = '';
     $dbname = 'datadb';
 
     $conn = mysqli_connect($servername, $user, $password, $dbname);

$output="";
    $query = "SELECT * FROM dataprice WHERE ref_id ='".$_POST['dataID']."' ORDER BY data_type";
    $result = mysqli_query($conn,$query);
    $output .='<option value="" disabled select>Select Data</option>';
    while($row = mysqli_fetch_array($result)){
        $output .= '<option value="'.$row["id"].'">'.$row["data_type"]. ' ₦'. $row["price"].'</option>';
    }

echo $output;
?>