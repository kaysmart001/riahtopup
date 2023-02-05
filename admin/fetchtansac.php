<?php

$servername = 'sql105.epizy.com';
     $user = 'epiz_33070717';
     $password = 'WBtcNlYDj3Y5qkD';
     $dbname = 'epiz_33070717_vtu_db';
 
     $conn = mysqli_connect($servername, $user, $password, $dbname);

$output="";
    $query = "SELECT * FROM transactions WHERE email LIKE '%".$_POST['search']."%'";
    $result = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($result) > 0){
    $output.='<table class="table table-hover" width="100%" style="text-align: center;  border:  1px solid #eee; ">
    <thead>
      <tr>
           <th>#</th>
       <th>Email</th>
        <th>Amount</th>
        <th>Transaction ID</th>
        <th>Date</th>
    
      </tr>
    </thead>';

    while($row = mysqli_fetch_array($result)){
        $output.='<tr>
        <td>'. $row['id'].'</td>
        <td>'. $row['email'].'</td>
        <td>'. $row['amount'].'</td>
        <td>'. $row['ref_num'].'</td>
        <td>'. $row['transact_num'].'</td>
    
    </tr>';
  
    }
    echo $output;
    }
    else{
        echo "Data not found";
    }
?>
