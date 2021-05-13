<?php 
require '../model/order_food_online_class.php';
session_start();
if (isset($_POST['action'])) {
    $action = $_POST['action'];
}else if(isset($_GET['action'])) {
    $action = $_GET['action'];
}else{
    $action = 'main';
}

switch ($action) {
    case 'main':
        $showFood = new Online_order_class(); 
        // $random
        if(isset($_GET['filter'])){
            if ($_GET['filter'] == 'rating') {
                // filter by rating
            }
        }
        $randomFood = $showFood->show_random_hotels();
        include './order_food_online.php';
        break;
    
    default:
        # code...
        break;
}
?>