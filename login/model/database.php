<?php
$user = 'root';
$password = 'root';

try {
    $db = new PDO('mysql:host=localhost;dbname=zomato',$user,$password);
}catch (PDOException $a){
    $erro_message = $a;
    include 'database_error.php';
}