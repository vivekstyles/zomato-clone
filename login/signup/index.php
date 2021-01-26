<?php
require '../model/user_sign_db.php';

if (isset($_POST['action'])){
    $action = $_POST['action'];
}elseif (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'signup';
}

if ($action === 'signup'){
    include 'signup.php';

} elseif ($action === 'insert_data'){
    $fullName = $_POST['fullname'];
    $Email = $_POST['email'];
    $password = $_POST['password'];
    $row = insert_user_info($fullName,$Email,$password);
    if ($row){
        $error_message = "Welcome $fullName";
        include '../../home/view/index.html';
        exit();
    }else{
        $error_message = 'already user exists';
        include 'signup.php';
        exit();
    }

}elseif ($action === 'login') {
    include 'login.php';

}elseif ($action === 'login_data'){
    $Email = $_POST['email'];
    $password = $_POST['password'];
    $res = get_login_info($Email,$password);
    if ($res){
        include '../../home/view/index.html';
        exit();
    }else{
        $check = check_login_info($Email);
        if ($check){
            $error_message = 'Password incorrect';
            include 'login.php';
        }else {
            $error_message = "you don't have account. <a href='signup.php'>create new account?</a>";
            include 'login.php';
        }
    }
}
