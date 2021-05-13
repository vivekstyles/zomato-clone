<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/print_hotel.css">
    <title>Document</title>
    <script>
        // document.write('<h1>zomato</h1>');
    </script>
</head>
<body>
    
    <h1 class="display-2 bg-danger"><?php echo $create_restarunt->insert_restarunt_details(); ?></h1>
    <header class="container">
        <div class="alert alert-success" role="alert">
            <strong>Restaurant successfully created</strong> <a href="#" class="alert-link"></a>
            <!-- <?php echo $se->get_restarunt_name()?> -->
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-2 container-fluid">
                    <a name="" id="" class="btn btn-primary" href=".?action=myHotel&user_restarunt=YES" role="button">Create my restaurant</a>
                </div>
            </div>
        </div>
    </main>

    <!-- jquery script -->
    <script src="../../bootstrap/js/jquery-3.6.0.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

</body>

</html>