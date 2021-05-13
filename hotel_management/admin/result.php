<?php 
    foreach ($_FILES['image'] as $key => $value) {
        # code...
        echo $key.' : '.$value.'<br>';
    }
    echo 'here<br>';
    echo $price.'<br>';
    echo $category.'<br>';
    echo $veg_type.'<br>';
    echo $footData->get_binary_image();
    // echo $price.'<br>';
    // echo $category.'<br>';
    // echo $veg_type.'<br>';
    // echo $image.'<br>';

?>

