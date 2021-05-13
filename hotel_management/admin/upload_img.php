<?php
if (isset($_GET['select'])) {
        $select = $_GET['select'];
}else{
    $select = 'foot_image';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/upload.css">
    <script src="../js/upload.js"></script>
    <title>restaurant upload Image</title>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="../../home/view/index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="../../image/zomoto_logo.jpeg" width="120px" alt="">
            </a

            <ul class="nav nav-pills">
                <li class="nav-item nav-pills list-unstyled"><a href="#" class="nav-link active">Home</a></li>
                <li class="nav-item list-unstyled"><a href="#" class="nav-link">Features</a></li>
                <li class="nav-item list-unstyled"><a href="#" class="nav-link">Pricing</a></li>
            </ul>
        </header>
        <div class="container-fluid">
            <div class="row">

                                                        <!-- nav starts -->
                <nav id="sidebarMenu" class="col-lg-3 d-md-block bg-light h-100">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href=".?select=foot_image&action=listed_Restaurant">
                                    <span data-feather="home"></span>
                                    Upload food Images
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="order" href=".?select=hotel_picture&action=listed_Restaurant">
                                    <span data-feather="file"></span>
                                    upload hotel pictures
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=".?select=upload_menu&action=listed_Restaurant">
                                    <span data-feather="shopping-cart"></span>
                                    menu
                                </a>
                            </li>
                </nav> 
                <!-- nav ends -->
                                                            <!-- main starts -->
        <?php if($select === 'foot_image'): ?>
                <main class="col-lg-9 align-content-end px-lg-5">
                    <div class="jumbotron">
                        <h1 class="display-3" id="hi"><?php echo $restaurant_name;?></h1>
                        <p class="lead">Insert image by category</p>
                        <hr class="my-2">
                    </div>

                    <!-- form starts -->
                    <form action="." method="POST" enctype="multipart/form-data" id="form_id">
                        <input type="hidden" name="action" value="insert_image">

                        <!-- uploading images -->
                        <div class="form-group mb-4">
                            <label class="custom-file mt-2 mb-2">Select food image
                                <input type="file" name="image" id="image" placeholder="" class="custom-file-input accordion-button" aria-describedby="fileHelpId">
                                <span class="custom-file-control"></span>
                            </label>
                            <?php if ($error == ''):?>
                            <small id="fileHelpId" class="form-text text-muted">choose image from your device</small>
                            <?php else:?>
                            <small id="fileHelpId" class="form-text text-muted"><?php echo $error;?></small>
                            <?php endif; ?>
                        </div>
                        
                        <!-- enter food category -->
                        <div class="form-group col-lg-3">
                            <label for="">Category</label>
                            <input type="text"class="form-control form-control-sm" name="category" id="category" aria-describedby="helpId" placeholder="">
                            <span id="category_error">*</span>
                        </div>
                        <br>

                        <!-- enter food price -->
                        <div class="form-group col-lg-3">
                            <label for="">Price</label>
                            <input type="text"class="form-control form-control-sm" name="price" id="price" aria-describedby="helpId" placeholder="" autocomplete="off">
                            <span id="price_error">*</span>
                        </div>
                        <br>

                        <!-- select veg type -->
                        <div class="form-group col-lg-3">
                            <label for="">veg or non-veg</label>
                            <select class="form-control form-control-sm" name="veg_type" id="">
                                <option>veg</option>
                                <option>non-veg</option>
                            </select>
                        </div>

                        <!-- submit button -->
                        <button type="submit" class="btn col-3 btn-danger mb-4 mt-5" id="submitID">Submit</button>
                    </form>
                    <!-- form ends -->

            </div>
            </main>
        <?php elseif ($select === 'hotel_picture'):?>
            <?php include '../view/hotel_banner_images.php'; ?>  
        <?php elseif ($select === 'upload_menu'):?>
            <?php include '../view/hotel_menu_images.php'; ?>  
        <?php endif?>
        </div>
    </div>
    <script src="../../bootstrap/js/jquery-3.6.0.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>