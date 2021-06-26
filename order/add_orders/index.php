<?php 
require '../../order_food_online/model/order_food_online_class.php';
session_start();
$_SESSION['recentView'] = array();
if (isset($_POST['action'])) {
    # code...
    $action = $_POST['action'];
}elseif (isset($_GET['action'])) {
    # code...
    $action = $_GET['action'];
}else {
    # code...
    $action = 'order';
}

switch ($action) {
    case 'order':

        include 'add_order.php';
        exit();
        break;
    
    case 'ViewHotel';
        if (isset($_GET['hotel_primary_key'])) {
            if (!empty($_GET['hotel_primary_key'])) {
                $hotelId = $_GET['hotel_primary_key'];
                $showFood = new Online_order_class();
                $hotelId = $showFood->get_hotel_banner($hotelId);
                $blogImg = $showFood->get_restaurant_images();
                $category = $showFood->get_categorys();
                $allFoods = $showFood->get_restaurant_food_images();
                $menuImage = $showFood->get_restaurant_menu_images();
                include './add_order.php';
            }
        }
        break;
    case 'cart':
        if (isset($_GET['mobile'])) {
            $orderid = $_GET['mobile'];
        }
        //  Online_order_class::get_food_details_by_foodId($orderid); // this session will store the food details from food images
        $_SESSION['verify_ord'] = array();

        $ord = array();
        for ($i=0; $i < count($orderid); $i++) { 
            $_SESSION['verify_ord'][$i] = Online_order_class::get_food_details_by_foodId($orderid[$i]);
            array_push($_SESSION['recentView'],Online_order_class::get_food_details_by_foodId($orderid[$i]));
        }

        header('location:../verify/index.php?action=verify');
    default:

        break;
}