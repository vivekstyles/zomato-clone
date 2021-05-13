<?php
$user = 'root';
$password = 'root';

try {
    $db = new PDO('mysql:host=localhost;dbname=zomato',$user,$password);
}catch (PDOException $a){
    $erro_message = $a;
    include '../view/database_error.php';
}

try {
    $mysql_db = new mysqli('localhost',$user,$password,'zomato',88989);
} catch (Exception $a) {
    //throw $th;
    $erro_message = $a;
    include '../view/database_error.php';

}