<?php
require '../model/hotel_db.php';
require '../model/enquery_db.php';
require '../model/create_restaurant.php';


if(empty($_SESSION['hotel'])) $_SESSION['hotel'] = '';

if (isset($_GET['user_restaurant'])) {
    if (!$_GET['user_restaurant']) {
        $_SESSION['user_restaurant'] = $_GET['user_restaurant'];
    }
}

session_start();
if (!empty($_GET['error'])) {
    # code...
    $error = $_GET['error'];
} else {
    # code...
    $error = '';
}

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "hotelHomepage";
}

$rest;


switch ($action) {
    case 'hotelHomepage':
        # code...
        $error_message = '';
        include "zomato_for_business.php";
        break;
    
        // this case is only if user already have an restaurant he skip the create restaurant page 
    case 'listed_Restaurant':
        $hotel = get_all_hotel_column($_SESSION['user_id']);
        if ($hotel !== 'empty') {
            $_SESSION['hotel'] = new Create_restaurant_class($_SESSION['user_id'],$hotel);
            $restaurant_name = $_SESSION['hotel'];
            $restaurant_name = $restaurant_name->get_restarunt_name();
            
            include './upload_img.php';
        }else{
            header('location:.?action=Create your restaurant page');
        }
        break;

        //  this is just an enquery controller for enquery data
    case 'contact':
        $name = $_POST['fullName'];
        $phone = $_POST['phoneNo'];
        $email = $_POST['email'];
        $restaurant_name = $_POST['restaurantName'];
        $city = $_POST['city'];

        $enquery = new Contuct($name, $phone, $email, $restaurant_name, $city);
        if ($enquery->insert_enquery_detail()) {
            # code...
            $error_message = 'thanks for your intrest';
            header('location:.?');
        } else {
            $error_message = 'thanks for your intrest';
            header('location:.?');
        }
        break;
        
        // this case just show if your restaurant is listed else gives you option to creete restaurant
    case 'register':
        if (empty($_SESSION['user_name'])) {
            # code...
            header('location:../../login/signup/index.php?app_root=find_ur_restaurant&action=login');
        } else {
            # code...
            include '../../hotel_management/admin/Find_your_restaurant.php';
        }

        break;

        // this page is restaurant creating page it get all the information about restaurant 
    case 'Create your restaurant page':
        if (empty($_GET['errormsg'])) {
            $php_errormsg = '';
        } else {
            # code...
            $php_errormsg = $_GET['errormsg'];
        }
        
        include '../admin/for_business_login.php';
        break;

        // this page is restaurant creating page it get all the information about restaurant 
    case 'Create_hotel':
        $create_restarunt = new Create_restaurant_class($_SESSION['user_id'],$_POST);
        if (empty($_SESSION['hotel'])) {
            $_SESSION['hotel'] = new Create_restaurant_class($_SESSION['user_id'],$_POST);
        }
        if ($create_restarunt->getErrorMessage()) {
            # code...
            if ($create_restarunt->insert_restarunt_details()) {
                $create_restarunt->add_hotelId_to_user();
                $se = $_SESSION['hotel'];
                include './print_hotel.php';
            } else {
                header("location:?action=Create your restaurant page&error=dberorr&errormsg={$create_restarunt->error_message[0]}");
            }
        } else {
            # code...
            header('location:?action=Create your restaurant page&error=error');
        }

        exit();
        break;

        //  loads the hotel page to upload images

    case 'myHotel':
        if (isset($_SESSION['hotel'])) {

            $restaurant_name = $_SESSION['hotel'];
            $restaurant_name = $restaurant_name->get_restarunt_name();

            include './upload_img.php';
            exit();

        }
        // $hotel = $_SESSION['hotel'];
        // include './upload_img.php';
        break;
    
        //  insert food images by category
    case 'insert_image':
        $hotel = $_SESSION['hotel'];
        if (isset($_GET['select'])) {
            $select = $_GET['select'];
        }
        if ($_FILES['image']['tmp_name'] == false) {
            header('location:.?action=myHotel&error=Please select image');
            exit();
        }
        $price = $_POST['price'];
        $category = $_POST['category'];
        $veg_type = $_POST['veg_type'];
        $filename = addslashes($_FILES["image"]["name"]);
        $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $filetype = addslashes($_FILES["image"]["type"]);
        $ary = array('jpg','jpeg','png');
        $ext = pathinfo($filename,PATHINFO_EXTENSION);
        if(!empty($filename)){
            if(in_array($ext, $ary)){
                $footData = new UploadMenuClass($hotel->get_mobile_number());
                $res = $footData->insert_image_by_category($category,$price,$veg_type,$image);
                if ($res) {
                    include './result.php';
                }
                else{
                    $error = $res;
                    header("location:.?action=myHotel&error='$error'");
                    exit();
                }
            }
        }
        break;
    case 'insert_banner_and_menu_image':
        $hotel = $_SESSION['hotel'];
        if (isset($_GET['select'])) {
            $select = $_GET['select'];
        }
        if ($_FILES['banner_image']['tmp_name'] == false) {
            header('location:.?action=myHotel&error=Please select image');
            exit();
        }
        $about = $_POST['about'];
        $per_person = $_POST['per_person'];
        $filename = addslashes($_FILES["banner_image"]["name"]);
        $image = addslashes(file_get_contents($_FILES["banner_image"]["tmp_name"]));
        $filetype = addslashes($_FILES["banner_image"]["type"]);
        $ary = array('jpg','jpeg','png');
        $ext = pathinfo($filename,PATHINFO_EXTENSION);

        if (!empty($filename)) {
            if(in_array($ext,$ary)){
                $banner  = new UploadMenuClass($hotel->get_mobile_number());
                $res = $banner->insert_hotel_banner($image,$about,$per_person);
                if ($res) {
                    include './result.php';
                }
                else{
                    $error = $res;
                    header("location:.?action=myHotel&error='$error'");
                    exit();
                }
            }
        }
        break;
        
    case 'insert_blog_image':
        $hotel = $_SESSION['hotel'];
        if (isset($_GET['select'])) {
            $select = $_GET['select'];
        }
        if ($_FILES['blog_image']['tmp_name'] == false) {
            header('location:.?action=myHotel&error=Please select image');
            exit();
        }
        $filename = addslashes($_FILES["blog_image"]["name"]);
        $image = addslashes(file_get_contents($_FILES["blog_image"]["tmp_name"]));
        $filetype = addslashes($_FILES["blog_image"]["type"]);
        $ary = array('jpg','jpeg','png');
        $ext = pathinfo($filename,PATHINFO_EXTENSION);

        if (!empty($filename)) {
            if(in_array($ext,$ary)){
                $banner  = new UploadMenuClass($hotel->get_mobile_number());
                $res = $banner->insert_blog_image($image);
                if ($res) {
                    include './result.php';
                }
                else{
                    $error = $res;
                    header("location:.?action=myHotel&error='$error'");
                    exit();
                }
            }
        }
    default:
        # code...
        break;
}











