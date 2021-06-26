<?php
include '../../order_food_online/model/order_food_online_class.php';
session_start();

if (isset($_POST['action'])) {
    # code...
    $action = $_POST['action'];
}elseif (isset($_GET['action'])) {
    # code...
    $action = $_GET['action'];
}else {
    # code...
    $action = 'main';
} 
if(empty($_SESSION['email_id'])) $_SESSION['email_id'] = '';

switch ($action) {
    case 'main':
        header('location:./verify.php');
        break;
    case 'verify':
        $orders = $_SESSION['orders'];
        include './verify.php';
        break;

    default:
        break;
}
?>