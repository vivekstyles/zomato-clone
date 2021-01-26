<?php
include 'database.php';

function insert_user_info($fullName,$Email,$password){
    global $db;
    $query = "insert into user(first_name, email, password) values ('$fullName','$Email','$password');";
    $num_of_rows = $db->exec($query);
    if ($num_of_rows == 1){
        return true;
    }else{
        return false;
    }
}

function get_login_info($email,$password){
    global $db;
    $query = "select * from user where password = '$password' and email = '$email';";
    $r = $db->query($query);
    $row = $r->fetch();
    if (isset($row['email'])){
        return true;
    }else{
        return false;
    }
}

function check_login_info($email){
    global $db;
    $query = "select * from user where email = '$email';";
    $row  = $db->query($query);
    $row = $row->fetch();
    if (isset($row['email'])){
        return true;
    }else{
        return false;
    }
}



