<?php 
require '../../hotel_management/model/hotel_db.php';

$lifetime = 60;
session_set_cookie_params($lifetime,'/');
session_start();
if(empty($_SESSION['user_name'])) $_SESSION['user_name'] = '';

if (isset($_POST['action'])) {
    $action = $_POST['action'];
}elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
}else {
    $action = 'home_page';
}

switch ($action){
    case 'home_page':
        if (isset($_GET['search'])){
            if (empty($_GET['search'])) {
                $search = $_GET['search'];
            }
            else{
                $search = 'chennai';
            }
        }
        $hotel = new Hotels('chennai','dominos','pizza');
        $all_hotels = $hotel->get_all_hotel();
        include("home.php");
        break;
    case 'login':
        header("location:../../login/signup/index.php?action=$action");
        break;
    case 'signup':
        header("location:../../login/signup/index.php?action=$action");
        break;
    case 'order_food_online':
        header('Location:../../order_food_online/online_order/index.php');
        break;
    case 'go_out':
        include '../../dinning/dinning_online/index.php';
        break;
    case  'logout':
        session_destroy();
        header('location:index.php');
        break;
}
    