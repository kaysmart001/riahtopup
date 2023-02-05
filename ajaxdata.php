<?php

$servername = 'sql105.epizy.com';
     $user = 'epiz_33070717';
     $password = 'WBtcNlYDj3Y5qkD';
     $dbname = 'epiz_33070717_vtu_db';
 
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
