<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../../order_food_online/style/main_footer.css">
    <title>dinning</title>
</head>
<body>
    <header>
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
            <?php if (!empty($_SESSION['user_name'])) : ?>
            <li><img src="../../home/images/wine_2x.png.jpeg" alt=""></li>
            <li id="user-name"><a href=""><?php echo $_SESSION['user_name']; ?></a>
            <?php endif ?>
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
        </ul>
    </header>
    <nav>
        <a href="">Home
            /
            Bengaluru
            /
            Collections
            /
            Holi Greetings
            </a>
    </nav>
    <main>
                <!-- main image container -->

        <div id="main-image">
            <img src="../images/55B801BD-2DF7-4B6C-9151-2B403DAB975D_4_5005_c.jpeg" alt="">
            <div id="festivel-continer">
                <h3>Holi Greetings</h3>
                <p>Celebrate the festival of love and colours with the Holi's favourites</p>
                <p>18 Place(s)</p>
            </div>
            <div id="link-tag">
                <p>+ save Collections</p>
                <p>link</p>
            </div>
        </div>
                <!-- hotel lists -->
        
        <div id="hotel-list">
            <?php for ($i=0; $i < 18; $i++) : ?>
                <ul>
                    <li><img src="../../order_food_online/Image/a3323233b67cc56774dda311aa6903a31615696511.png.jpeg" width="22%"  alt="img"></li>
                    <li>Beer Adda</li>
                    <li>4.2 (771) | 3.0 (34)</li>
                    <li><a href="">Koramangala 5th Block</a></li>
                    <li><a href="">Pub, Casual Dining - North Indian, Chinese, Pizza, Continental, Salad, Burger, Biryani, Beverages</a></li>
                </ul>
            <?php endfor ?>
        </div>
                <!-- more collection -->

        <div id="Collections">
            <h2>More Collections</h2>
            <?php for ($i=0; $i < 18; $i++) : ?>
            <ul>
                <li><img src="../../order_food_online/Image/aebeb88b78a4a83ea9e727f234899bed1602781186.png.jpeg" alt="img">
                    <ul>
                        <li>Holi Greetings</li>
                        <li><span>18 Places</span></li>
                    </ul>
                </li>
            </ul>
            <?php endfor ?>
        </div>
        <div id="Explore">
            <h3>Explore other options for you here</h3>
            <h4>Popular cuisines near me</h4>
            <div id="nearme">
                <ul>
                    <li><a href="">Arabian food near me •</a></li>
                    <li><a href="">Bakery food near me •</a></li>
                    <li><a href="">Beverages food near me •</a></li>
                    <li><a href="">Biryani food near me •</a></li>
                    <li><a href="">Burger food near me •</a></li>
                    <li><a href="">Chettinad food near me •</a></li>
                    <li><a href="">Chinese food near me •</a></li>
                    <li><a href="">Continental food near me •</a></li>
                    <li><a href="">Desserts food near me •</a></li>
                    <li><a href="">Ice Cream food near me •</a></li>
                    <li><a href="">Italian food near me •</a></li>
                    <li><a href="">Juices food near me •</a></li>
                    <li><a href="">Lebanese food near me •</a></li>
                    <li><a href="">Mughlai food near me •</a></li>
                    <li><a href="">North Indian food near me •</a></li>
                    <li><a href="">Pizza food near me •</a></li>
                    <li><a href="">Sandwich food near me •</a></li>
                    <li><a href="">Sandwich food near me •</a></li>
                    <li><a href="">Seafood food near me •</a></li>
                    <li><a href="">South Indian food near me •</a></li>
                    <li><a href="">Street food near me</a></li> 
                </ul>    
            </div>
            <div id="typesnear">
                <h4>Popular restaurant types near me</h4>
                <ul>
                    <li><a href="">Bakeries near me •</a></li>
                    <li><a href="">Bars near me •</a></li>
                    <li><a href="">Beverage Shops near me •</a></li>
                    <li><a href="">Bhojanalya near me •</a></li>
                    <li><a href="">Cafés near me •</a></li>
                    <li><a href="">Casual Dining near me •</a></li>
                    <li><a href="">Clubs near me •</a></li>
                    <li><a href="">Confectioneries near me •</a></li>
                    <li><a href="">Desserts food near me •</a></li>
                    <li><a href="">Dessert Parlors near me •</a></li>
                    <li><a href="">Dhabas near me •</a></li>
                    <li><a href="">Fine Dining near me •</a></li>
                    <li><a href="">Food Courts near me •</a></li>
                    <li><a href="">Food Trucks near me •</a></li>
                    <li><a href="">Irani Cafes near me •</a></li>
                    <li><a href="">Kiosks near me •</a></li>
                    <li><a href="">Lounges near me •</a></li>
                    <li><a href="">Meat Shops near me •</a></li>
                    <li><a href="">near me •</a></li>
                    <li><a href="">Paan Shop near me •</a></li>
                    <li><a href="">Pubs near me •</a></li> 
                    <li><a href="">Quick Bites near me •</a></li>
                    <li><a href="">Sweet Shops near me</a></li>
                </ul>    
            </div>
            <div class="chains">
                <h4>Top Restaurant Chains</h4>
                <ul>
                    <li><a href="">Burger King</a></li>
                    <li><a href="">Domino's</a></li>
                    <li><a href="">Faasos</a></li>
                    <li><a href="">KFC</a></li>
                    <li><a href="">Krispy Kreme</a></li>
                </ul>
            </div>
            <div class="chains">
                <ul>
                    <li><a href="">McDonald's</a></li>
                    <li><a href="">Paradise Biryani</a></li>
                    <li><a href="">Pizza Hut</a></li>
                    <li><a href="">WOW! Momo</a></li>
                </ul>    
            </div>
            <div id="cites">
                <h4>Cities We Deliver To</h4>  
                <ul>
                    <li><a href="">Delhi NCR</a></li>
                    <li><a href="">Kolkata</a></li>
                    <li><a href="">Mumbai</a></li>
                    <li><a href="">Bengaluru</a></li>
                    <li><a href="">Pune</a></li>
                    <li><a href="">Hyderabad</a></li>
                    <li><a href="">Chennai</a></li>
                    <li><a href="">Lucknow</a></li>
                    <li><a href="">Kochi</a></li>
                    <li><a href="">Jaipur</a></li>
                    <li><a href="">Ahmedabad</a></li>
                    <li><a href="">Chandigarh</a></li>
                    <li><a href="">Goa</a></li>
                    <li><a href="">Indore</a></li>
                    <li><a href="">Nashik</a></li>
                    <li><a href="">Ooty</a></li>
                    <li><a href="">Shimla</a></li>
                    <li><a href="">Ludhiana</a></li>
                    <li><a href="">Guwahati</a></li>
                    <li><a href="">Amritsar</a></li>
                    <li><a href="">Kanpur</a></li>
                    <li><a href="">Allahabad</a></li>
                    <li><a href="">Aurangabad</a></li>
                    <li><a href="">Bhopal</a></li>
                    <li><a href="">Ranchi</a></li>
                    <li><a href="">Visakhapatnam</a></li>
                    <li><a href="">Bhubaneswar</a></li>
                    <li><a href="">Coimbatore</a></li>
                    <li><a href="">Mangalore</a></li>
                    <li><a href="">Vadodara</a></li>
                    <li><a href="">Nagpur</a></li>
                    <li><a href="">Agra</a></li>
                    <li><a href="">Dehradun</a></li>
                    <li><a href="">Mysore</a></li>
                    <li><a href="">Puducherry</a></li>
                    <li><a href="">Surat</a></li>
                    <li><a href="">Varanasi</a></li>
                    <li><a href="">Patna</a></li>
                    <li><a href="">Udaipur</a></li>
                    <li><a href="">Cuttack</a></li>
                    <li><a href="">Trivandrum</a></li>
                    <li><a href="">Haridwar</a></li>
                    <li><a href="">Leh</a></li>
                    <li><a href="">Pushkar</a></li>
                    <li><a href="">Rajkot</a></li>
                    <li><a href="">Madurai</a></li>
                    <li><a href="">Kozhikode</a></li>
                    <li><a href="">Alappuzha</a></li>
                    <li><a href="">Thrissur</a></li>
                    <li><a href="">Manipal</a></li>
                    <li><a href="">Vijayawada</a></li>
                    <li><a href="">Jodhpur</a></li>
                    <li><a href="">Kota</a></li>
                    <li><a href="">Ajmer</a></li>
                    <li><a href="">Mussoorie</a></li>
                    <li><a href="">Rishikesh</a></li>
                    <li><a href="">Jalandhar</a></li>
                    <li><a href="">Jammu</a></li>
                    <li><a href="">Manali</a></li>
                    <li><a href="">Dharamshala</a></li>
                    <li><a href="">Raipur</a></li>
                    <li><a href="">Gorakhpur</a></li>
                    <li><a href="">Palakkad</a></li>
                    <li id="seemore"><a href="">See more</a></li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
    <?php include '../../order_food_online/view/main_footer.html'?>
    </footer>
</body>
</html>