<?php

session_start();

if (isset($_POST['action'])) {
    # code...
    $action = $_POST['action'];

}elseif(isset($_GET['action'])){
    
    $action = $_GET['action'];
} 
else {
    
    $action = 'go_out';
}

switch ($action) {
    case 'go_out':
        header ('location:../../dinning/dinning_online/dinning.php');
        break;
    
    default:
        # code...
        break;
}

?>