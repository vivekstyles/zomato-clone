
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/add_orders.css">
    <link rel="stylesheet" href="../style/option.css">
    <script src="../js/add_order.js"></script>
    <script src="../js/show_menu.js"></script>

    <title>Order</title>
</head>
<body>
    <header id="header-1">
        <a href="../../home/view/index.php"><img src="../../image/zomoto_logo.jpeg" alt=""></a>
        <form name="" action="">   
        <div id="input-border">
			<input type="text" name="link" id="location" placeholder="chennai" list="links" >
            <datalist id="links">
                <option value="kolathur" label="chennai" ></option>
                <option value="anna nagar" label="chennai"></option>
                <option value="anna salai" label="chennai"></option>
                <option value="anna sathurangam" label="chennai"></option>
                <option value="vr" label="bangalur"></option>
                <option value="paris" label="chennai"></option>
            </datalist>
            <input type="text" placeholder="Search for restaurant, Cauisine or a dish" id="hotel">
            </div>
        </form>
        <ul>
            <?php if (!empty($_SESSION['user_name'])):?>
            <li><img src="../../home/images/wine_2x.png.jpeg" alt=""></li>
            <li id="user-name"><a href="" class="text-capitalize"><?php echo $_SESSION['user_name'];?></a>
                <ul>
                    <li><a href="../../profile/profile/index.php">Profile</a></li>
                    <li><a href="">Notifications</a></li>
                    <li><a href="">Bookmarks</a></li>
                    <li><a href="">Reviews</a></li>
                    <li><a href="">Network</a></li>
                    <li><a href="">Find friends</a></li>
                    <li><a href="">Settings</a></li>
                    <li><a href="">Log out</a></li>
                </ul>
            </li>
            <?php endif;?>
        </ul>
    </header>
    <nav>
        <a href="">Home
/
India
/
chennai
/
Central chennai
/
St. Marks Road
/
Leon Grill
/
<span>Order Online</span></a>
    </nav>
    <main>
        <img <?php echo 'src="data:image/jpeg;base64,'.base64_encode($hotelId[0]['image']).'"'; ?> alt="banner" title='banner' height="384">
        
        <div id="box-image">
            <img <?php echo 'src="data:image/jpeg;base64,'.base64_encode($blogImg[0]['image']).'"';?> height="190">
            <br>
            <img <?php echo 'src="data:image/jpeg;base64,'.base64_encode($blogImg[1]['image']).'"'; ?> height="190">
        </div>

        <div id="input-image">
        <img <?php echo 'src="data:image/jpeg;base64,'.base64_encode($blogImg[2]['image']).'"'; ?> height="190">
            <form action="" method="" enctype="">
            <img <?php echo 'src="data:image/jpeg;base64,'.base64_encode($blogImg[3]['image']).'"'; ?> height="190">
            </form>
            <p id="plus">+</p>
            <p>Add photos</p>
        </div>
        <div id="main-image">
            <section id="section-1">
                <div id="food-details">
                    <h1 class="text-capitalize"><?php echo $hotelId[0]['Restaurant'];?></h1>
                    <a href="" class="text-capitalize"><?php echo $hotelId[0]['about_hotel'];?><br><span><?php echo $hotelId[0]['city'];?></span></a>
                    <p><span>Open now</span> - 7am – 12midnight (Today)</p>
                </div>

                <div id="dining-rating">
                    <p><img src="../../image/image/pngfind.com-red-star-png-454438.png" alt="star">4.1</p>
                    <p class="p">407 Dining Reviews</p>
                </div>

                <div id="delivery-rating">
                    <p><img src="../../image/image/pngfind.com-red-star-png-454438.png" alt="star">4.1</p>
                    <p class="p">11.7K Delivery Reviews</p>
                </div>
                                                    <!-- section nav starts -->
                <nav>
                    <ul>
                        <li><button>Add Review</b></li>
                        <li><button>Direction</but></li>
                        <li><button>Bookmark</button></li>
                        <li><button>Share</button></li>
                    </ul>
                </nav>
            </section>
            <?php include '../view/order_online.php' ?>
            <section id="section-3">
                <div class="last-container">
                    <h3>Related to Leon Grill, St. Marks Road</h3>
                    <a href="">Restaurants in Bangalore, Bangalore Restaurants, St. Marks Road restaurants, Best St. Marks Road restaurants, Central Bangalore restaurants, Quick Bites in Bengaluru, Quick Bites near me, Quick Bites in Central Bangalore, Quick Bites in St. Marks Road, in Bengaluru, near me, in Central Bangalore, in St. Marks Road, in Bengaluru, near me, in Central Bangalore, in St. Marks Road, Leon Grill Menu, Order food online in St. Marks Road, Order food online in Bengaluru, Order food online in Central Bangalore, New Year Parties in Bengaluru, Christmas' Special in Bengaluru, </a>
                </div>
                <div class="last-container">
                    <h3>Restaurants around St. Marks Road</h3>
                    <a href="">Residency Road restaurants, Lavelle Road restaurants, Church Street restaurants, Brigade Road restaurants, </a>
                </div>
                <div class="last-container">
                    <h3>Frequent searches leading to this page</h3>
                    <a href="">leon grill st marks road, leon grill st marks road menu, leon grill wiki, leon grill st marks, leon grill mg road, </a>
                </div>
            </section>
        </div>
    </main> 
    <?php include '../view/show_selected_food.php'?>
</body>
</html>