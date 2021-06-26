<?php
require '../model/user_sign_db.php';
session_start();

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'signup';
}

if ($action === 'signup') {
    $error_message = '';
    include 'signup.php';
} elseif ($action === 'insert_data') {
    $fullName = $_POST['fullname'];
    $Email = $_POST['email'];
    $password = $_POST['password'];
    $row = insert_user_info($fullName, $Email, $password);

    if ($row == true) {
        $_SESSION['user_name'] = get_user_name($Email, $password);
        $_SESSION['user_id'] = get_userId_name($Email, $password);
        $user_name = $_SESSION['user_name'];

        if (isset($_GET['app_root'])) {
            # code...
            
        } else {
            # code...
            header("location:../../home/view/home.php?name=$user_name");
            exit();
        }
    } elseif ($row == false) {
        $error_message = 'already user exists';
        include 'signup.php';
        exit();
    } else {
        # code...
        $error_message = $row;
        include 'signup.php';
        exit();
    }
} elseif ($action === 'login') {
    $error_message = '';
    
if (isset($_GET['app_root'])) {
    
    $_SESSION['app_login_root'] = $_GET['app_root'];
} else {
    $_SESSION['app_login_root'] = '';
}


    include "login.php";

} elseif ($action === 'login_data') {
    $Email = $_POST['email'];
    $password = $_POST['password'];
    $res = get_login_info($Email, $password);
    $_SESSION['user_name'] = get_user_name($Email, $password);
    $_SESSION['user_id'] = get_userId_name($Email, $password);
    $_SESSION['email_id'] = User_class::get_email($Email,$password);
    $user_name = $_SESSION['user_name'];
    if ($res) {

        if (isset($_SESSION['app_login_root'])) {
            # code...

            if (!empty($_SESSION['app_login_root'])) {
                # code...
                switch ($_SESSION['app_login_root']) {
                    case 'find_ur_restaurant':
                        # code...
                        header('location:../../hotel_management/admin/index.php?action=register');
                        // include '../../hotel_management/admin/index.php?action=register';
                        break;

                    default:
                        # code...
                        break;
                }
            }else{
            $header = header("location:../../home/view/home.php?name=$user_name");
            }
        } else {
            # code...
            $header = header("location:../../home/view/home.php?name=$user_name");
            exit();
        }
    } else {
        $check = check_login_info($Email);
        if ($check) {
            $error_message = 'Password incorrect';
            include 'login.php';
        } else {
            $error_message = "you don't have account. <a href='.?action=signup' style='color: black';> create new account?</a>";
            include 'login.php';
        }
    }
}
