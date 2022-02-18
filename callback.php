<?php

include './server.php';

$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
  die('No reference supplied');
}

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "authorization: Bearer sk_test_88027915fe80dd1bb8fe8023d13998a5cc18e312",
    "cache-control: no-cache"
  ],
));
//sk_live_f5fd20d05fd41b43b09861f52766662d32728160
$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);

if(!$tranx->status){
  // there was an error from the API
  die('API returned error: ' . $tranx->message);
}

if('success' == $tranx->data->status){
  // transaction was successful...

  $amount = $tranx->data->amount/100;
  $email = $tranx->data->customer->email;
  $trans_ref = $_GET['reference'];
  $transaction_date = $tranx->data->transaction_date;



$query = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM wallet WHERE userEmail = '$email'")) or die();
$oldAmount = $query['balance'];
$newbal = floor($oldAmount) + $amount;

echo $newbal;
$runthis = mysqli_query($conn, "UPDATE wallet SET balance = '$newbal' WHERE userEmail = '$email'") or die();


$transactthis = mysqli_query($conn, "INSERT INTO  transactions (amount, email, ref_num,transact_date) VALUE ('$amount', '$email', '$trans_ref','$transaction_date')") or die();

  // please check other things like whether you already gave value for this ref
  // if the email matches the customer who owns the product etc
  // Give value
  echo "Your Top-Up is Successful!";
}
