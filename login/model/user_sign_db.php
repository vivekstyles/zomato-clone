<?php
include '../../model/database.php';

class User_class{
    static protected $email;

    static public function get_email($Email,$password){
        global $db;
        
        $password = sha1($Email.$password);
        $query = "select * from user where password = '$password' and Email = '$Email';";
        $r = $db->query($query);
        $row = $r->fetch();
        if (isset($row['Email'])){
            self::$email = $row['Email'];
            return self::$email;
        }else{
            return false;
        }
    }
}

function insert_user_info($fullName,$Email,$password){
    global $db;
    $password = sha1($Email.$password);
    $query = "insert into user(Email,user_name,password) values('$Email','$fullName','$password');";
    try {
        //code...
        $num_of_rows = $db->exec($query);
        if ($num_of_rows == 1){
            return true;
        }else{
            return false;
        }
    } catch (PDOException $th) {
        //throw $th;
        $php_errormsg  = $th->getMessage();
        return false;
    }
    
}

function get_login_info($Email,$password){
    global $db;
    $password = sha1($Email.$password);
    $query = "select * from user where password = '$password' and Email = '$Email';";
    $r = $db->query($query);
    $row = $r->fetch();
    if (isset($row['Email'])){
        return true;
    }else{
        return false;
    }
}
function get_user_name($Email,$password){
    global $db;
    $password = sha1($Email.$password);
    $query = "select * from user where password = '$password' and Email = '$Email';";
    $r = $db->query($query);
    $row = $r->fetch();
    if (isset($row['Email'])){
        return $row['user_name'];
    }else{
        return false;
    }
}
function get_userId_name($Email,$password){
    global $db;
    $password = sha1($Email.$password);
    $query = "select * from user where password = '$password' and Email = '$Email';";
    $r = $db->query($query);
    $row = $r->fetch();
    if (isset($row['Email'])){
        return $row['user_id'];
    }else{
        return false;
    }
}
function check_login_info($Email){
    global $db;
    $query = "select * from user where Email = '$Email';";
    $row  = $db->query($query);
    $row = $row->fetch();
    if (isset($row['Email'])){
        return true;
    }else{
        return false;
    }
}

