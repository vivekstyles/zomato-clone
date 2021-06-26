<?php
session_start();
require_once '../../order_food_online/model/order_food_online_class.php';

if (isset($_POST['action'])) {
    # code...
    $action = $_POST['action'];
}elseif (isset($_GET['action'])) {
    # code...
    $action = $_GET['action'];
}else {
    
    $action = 'profile';
}

if (isset($_GET['aside'])) $aside = $_GET['aside'];

if (empty($aside)) $aside = 'reviews';


switch ($action) {
    case 'profile':
        # code...

        include '../profile/profile.php';
        break;
    case 'no':
        echo 'no';
    default:
        # code...
        break;
    }
?>