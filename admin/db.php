<?php

$servername = 'localhost';
$user = 'root';
$password = '';
$dbname = 'datadb';

$conn = mysqli_connect($servername, $user, $password, $dbname);

if(!$conn){
    die ("Connect Error: ". mysqli_connect_error());
}?>