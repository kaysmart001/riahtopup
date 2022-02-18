<?php
require 'DbConnect.php';

function loadAuthors(){
    $db = new DbConnect;
    $conn = $db->connect();

    $stmt = $conn->prepare("SELECT * FROM FROM authors");
    $stmt-execute();
    $authors = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $authors;
}

?>