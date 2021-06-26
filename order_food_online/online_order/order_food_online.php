<!DOCTYPE html>
<html lang="en">

<head>
    <title>aside</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/order_online.css">
    <link rel="stylesheet" href="../../order_food_online/style/main_footer.css">
</head>

<body>
    <header>
        <h1><a href="../../home/view/index.php"><img src="../../image/zomoto_logo.jpeg" alt="" width="150px"></a></h1>
        <?php if (empty($_SESSION['user_name'])) : ?>
        <a href=".?action=login" id="login">Login</a>
        <a href=".?action=signup" id="signup">Signup</a>
    <?php else : ?>
        <img src="../../order_food_online/Image/wine_2x.png.jpeg" alt="user logo" style="position: absolute;top:2%;height:2.5em;border-radius:5em;margin-left:80%;margin-top:0em;">
        <a href="#" id="username" style="position: absolute;top:2.5%;margin-left:83.5%;margin-top:0em;color:black;font-size:150%;font-weight:400;text-transform: capitalize;"><?php echo $_SESSION['user_name'] ?></a>
    <?php endif; ?>
    <form name="" action="">
        <input type="text" name="link" id="location" placeholder="chennai" list="links">
        <datalist id="links">
            <option value="kolathur" label="chennai"></option>
            <option value="anna nagar" label="chennai"></option>
            <option value="anna salai" label="chennai"></option>
            <option value="anna sathurangam" label="chennai"></option>
            <option value="vr" label="bangalur"></option>
            <option value="paris" label="chennai"></option>
        </datalist>
        <input type="text" placeholder="Search for restaurant, Cauisine or a dish" id="hotel">
    </form>
    <!-- path location -->
    <div id="links">
        <a href="">Home / </a><a href="">India / </a><a href="">chennai</a>
    </div>
    <div id="online_order">
        <ul>
            <li><a href="">Delivery</a></li>
            <li><a href="../../dinning/dinning_online/index.php?action=go_out">Dining Out</a></li>
            <li><a href="">Nightlife</a></li>
        </ul>
    </div>
    </header>
    <main>
        <section>
            <div id="filters">
                <ul>
                    <li><a href="">Filters</a></li>
                    <li><a href="index.php?filter=rating">Rating</a></li>
                    <li><a href="">Safe and hygienic</a></li>
                    <li><a href="">Pure Veg</a></li>
                    <li><a href="">Delevery Time</a></li>
                    <li><a href="">Greate Offers</a></li>
                </ul>
            </div>
            <div id="first_order">
                <h2>Inspiration for your first order</h2>
                <ul>
                    <li><a href=""><img src="../../order_food_online/Image/aebeb88b78a4a83ea9e727f234899bed1602781186.png.jpeg" alt="hell"></a><p>images</p></li>
                    <li><a href=""><img src="../../order_food_online/Image/27f9e4338adfe327d225967287c1ac361612437483.png.jpeg" alt=""></a><p>images</p></li>
                    <li><a href=""><img src="../../order_food_online/Image/742929dcb631403d7c1c1efad2ca2700.png.jpeg" alt=""></a><p>images</p></li>
                    <li><a href=""><img src="../../order_food_online/Image/a3323233b67cc56774dda311aa6903a31615696511.png.jpeg" alt=""></a><p>images</p></li>
                    <!-- <li><a href=""><img src="../../order_food_online/Image/a3323233b67cc56774dda311aa6903a31615696511.png.jpeg" alt=""></a><p>images</p></li>
                    <li><a href=""><img src="../../order_food_online/Image/a3323233b67cc56774dda311aa6903a31615696511.png.jpeg" alt=""></a><p>images</p></li> -->
                </ul>
            </div>
            <div id="order-food">
                <h2>Order food online in Periyamet, Chennai</h2>
                <ul>
                    <?php foreach ($randomFood as $value) :?>
                    <li>
                        <ul>
                            <li><a href="../../order/add_orders/index.php?action=ViewHotel&hotel_primary_key=<?php echo $value['mobileNo']?>"><?php echo '<img width="350" height="250" src="data:image/jpeg;base64,'.base64_encode($value['image']).'">';?></a></li>
                            <li><p id="hotel-name" class=" text-capitalize"><?php echo $value['Restaurant']; ?></p></li>
                            <li id="rating-li"><?php foreach(range(1,5) as $v):?> <img src="../../order_food_online/Image/pngfind.com-red-star-png-454438.png" alt="" id="rating"><?php endforeach?> 4.2</li>
                            <li id="item"><?php echo $value['about_hotel'].' ';?></li>
                            <li><span class="span-li"><?php echo '$'.$value['per_person']?></span> per person • 34 min</li>
                        </ul>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </section>
        <?php include '../../order_food_online/view/main_footer.html'?>