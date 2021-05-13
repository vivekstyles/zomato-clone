<?php 
require '../../order_food_online/model/order_food_online_class.php';
session_start();

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
                $hotelId = $showFood->show_hotel_banner($hotelId);
                $blogImg = $showFood->show_restaurant_images();
                include 'add_order.php';
            }
        }
    default:

        break;
}