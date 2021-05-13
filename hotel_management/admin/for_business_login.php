<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/for_business_login.css">
    <script src="../js/for_business_login.js"></script>
    <title><?php echo $hotelName; ?></title>
</head>

<body>
    <!-- header starts  -->
    <header>
        <a href="../../home/view/index.php"><img src="../image/3d432595dac7d2bda0b4cc41f6afe6ef1564646824.png" alt=""></a>
        <ul>
            <li>Contact us</li>
            <li id="user-logo"><a href="../../home/images/wine_2x.png.jpeg"><img src="../../home/images/wine_2x.png.jpeg" alt=""></a></li>
            <?php if (!empty($_SESSION['user_name'])) : ?>
                <li><?php echo $_SESSION['user_name']; ?></li>
            <?php endif; ?>
        </ul>
    </header>
    <!-- main starts  -->
    <main id="formid">
        <nav>
            <ul>
                <li>
                    <ul class="un-list">
                        <li id="nav-nest-list">
                            <h2><span>1</span> Outlet Information</h2>
                        </li>
                        <li class="nav-nest-list-2">Restaurant name, address, contact no., owner details</li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li>
                            <h2><span>2</span> Outlet Type & Timings </h2>
                            </h2>
                        </li>
                        <li class="nav-nest-list-2">Establishment & cuisine type, opening hours</li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li>
                            <h2><span>3</span> Upload Images</h2>
                            </h2>
                        </li>
                        <li class="nav-nest-list-2">Menu, restaurant, food images</li>
                    </ul>
                </li>
            </ul>
        </nav>
        <h1>Outlet Information</h1>

        <form action="." method="POST">
            <input type="hidden" name="action" value="Create_hotel">
            <section>
                <ul>
                    <li>
                        <h2>Restaurant details</h2>
                        <p>Name, address and location</p>
                        <ul>
                            <li>
                                <p>Restaurant name</p>
                                <input type="text" name="Restaurant" placeholder="Restaurant name">
                                <br>
                                <p>Restaurant complete address</p>
                                <input type="text" name="Restaurant_adrs" placeholder="Restaurant complete address">
                                <p>City</p>
                                <input type="text" name="city" placeholder="city">
                                <p id="co-ordinates">or directly enter the co-ordinates</p>
                                <p>Latitude</p>
                                <input type="text" name="latitute" placeholder="Latitude">
                                <p>Longitude</p>
                                <input type="text" name="longitude" placeholder="Longitude">
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section>
                <ul>
                    <li>
                        <h2>Contact number at restaurant</h2>
                        <p>Your customers will call on this number for general enquiries</p>
                        <ul>
                            <li>
                                <p>Mobile number at restaurant</p>
                                <input type="text" name="mobileNo" placeholder="Mobile number at restaurant" value="">
                                <br>
                                <p>landline number</p>
                                <input type="text" name="landlineNo" placeholder="landline number" value="">
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section>
                <ul>
                    <li>
                        <h2>Outlet owner details</h2>
                        <p>These will be used to share revenue related communications</p>
                        <ul>
                            <li>
                                <p>Outlet owner full name</p>
                                <input type="text" name="owner_name" placeholder="Full name">
                                <br>
                                <p>Outlet owner email address</p>
                                <input type="text" name="owner_email" placeholder="Email address">
                                <p>Same as restaurant mobile no.</p>
                                <input type="text" name="owner_no" placeholder="Mobile number of owner" value="">
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <?php if ($error === 'error' ):?>
                <div class="alert">
                <strong>Form cannot be empty</strong> <a href="#" class="alert-link"></a>
                </div>
            <?php elseif ($error === 'dberorr' ):?>
                <div class="alert">
                <strong><?php echo $php_errormsg; ?></strong> <a href="#" class="alert-link"></a>
                </div>
            <?php endif ?>
    </main>

    <div id="submit-tag">
        <input type="submit" value="Next">
    </div>
    </form>
</body>

</html>