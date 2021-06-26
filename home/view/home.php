<?php
try {
    //code...
    if (isset($_GET['name'])) {
        # code...
        $_SESSION['user_name'] = $_GET['name'];
    }
} catch (Exception $th) {
    //throw $th;
    echo $th->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>aside</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style/layout.css">
    <link rel="stylesheet" href="../style/nav_bar.css">
    <!-- <script src="../js/main.js"></script> -->
</head>

<body>
    <header>
        <?php if ($_SESSION['user_name'] == '') : ?>
            <a href=".?action=login" id="login">Login</a>
            <a href=".?action=signup" id="signup">Signup</a>

        <?php else : ?>
            <div id="user-profile">
                <ul>
                    <li><img src="../images/wine_2x.png.jpeg" alt="user logo"></li>
                    <li><a href="#" class="text-capitalize"><?php echo $_SESSION['user_name']; ?></a>
                        <ul>
                            <li><a href="../../profile/profile/index.php">Profile</a></li>
                            <li><a href="">Notifications</a></li>
                            <li><a href="">Bookmarks</a></li>
                            <li><a href="">Reviews</a></li>
                            <li><a href="">Network</a></li>
                            <li><a href="">Find friends</a></li>
                            <li><a href="">Settings</a></li>
                            <li><a href="index.php?action=logout">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
    </header>
    
    <main>
        <img src="../images/zomoto_login.jpeg" width="1440px" height="522px">
        <form  action="." method="GET" name="search">
            <h1>zomato</h1>
            <h2>Discover the best food &amp; drinks in chennai</h2>

            <input type="text" name="link" id="location" placeholder="chennai" list="links">
            <datalist id="links">
            <?php foreach($all_hotels as $values):?>
                <option value="<?php echo $values['city'];?>" label="<?php echo $values['Restaurant_adrs'];?>"></option>
                <!-- <option value="anna nagar" label="chennai"></option> -->
            <?php endforeach ?>
            </datalist>
            <input type="text" placeholder="Search for restaurant, Cauisine or a dish" id="hotel">
        </form>
        <div id="orders">
            <ul>
                <li>
                    <p><img src="../images/order_food_online.webp" width="270" height="190"><a href="../../home/view/index.php?action=order_food_online">Order food online</a> </p>
                </li>
                <li>
                    <p><img src="../images/go_out_for_a_meal.webp" width="270" height="190"><a href="../../home/view/index.php?action=go_out">Go out for a meal</a> </p>
                </li>
                <li>
                    <p><img src="../images/Nightlife&Clubs.jpeg" width="270" height="190"><a href="index.php">Nightlife &amp; Clubs</a> </p>
                </li>
                <li>
                    <p><img src="../images/zomato_pro.webp" width="270" height="190"><a href="index.php">Zomato Pro</a> </p>
                </li>
            </ul>
        </div>

        <!-- main start from here.... -->

    </main>
    <section>
        <h2 id="first-lists">Collections</h2>
        <p>Explore curated lists of top restaurants, cafes, pubs, and bars in Bengaluru, based on trends</p>
        <div id="link">
            <a href="">All collections in Chennai</a>
        </div>
        <div id="collectContainer">
            <ul>
                <li><img src="../images/li1img.webp" width="268" height="300"><a href="">New year's Special</a></li>
                <li><img src="../images/li2img.jpg" width="268" height="300"><a href="">Trenting This Week</a></li>
                <li><img src="../images/li3img.webp" width="268" height="300"><a href="">chennai's Finest</a></li>
                <li><img src="../images/li4img.jpg" width="268" height="300"><a href="">Best Bar's and Pubs</a></li>
            </ul>
        </div>
        <h2 id="popular">Popular localities in and around <b>Chennai</b></h2>
        <div id="localities">
            <ul>
                <li><a href="">kolathur(0)</a></li>
                <li><a href="">George Town(0)</a></li>
                <li><a href="">Seven Wells(0)</a></li>
                <li><a href="">Basin Bridge(0)</a></li>
                <li><a href="">Sowcarpet(0)</a></li>
                <li><a href="">Park Town(0)</a></li>
                <li><a href="">Periametu(0)</a></li>
                <li><a href="">Choolai(0)</a></li>
                <li><a href="">Veppery(0)</a></li>
                <li><a href="">Pattalam(0)</a></li>
                <li><a href="">Pulinanthope(0)</a></li>
                <li><a href="">T.V.K Nagar(0)</a></li>
                <li><a href="">Central(0)</a></li>
                <li><a href="">Padi(0)</a></li>
                <li><a href="">Pattabiram(0)</a></li>
                <li><a href="">Broadway(0)</a></li>
                <li><a href="">Redhills(0)</a></li>
                <li><a href="">Pattalam(0)</a></li>
                <li><a href="">Choolai(0)</a></li>
                <li><a href="">Ennore(0)</a></li>
                <li><a href="">Vallalar Nagar(0)</a></li>
                <li><a href="">Vyasarpadi(0)</a></li>
                <li><a href="">Parry's Corner(0)</a></li>
                <li><a href="">Madhavaram(0)</a></li>
                <li><a href="">Manali new town(0)</a></li>
                <li><a href="">Puzhal(0)</a></li>
                <li><a href="">Moolakadai(0)</a></li>
                <li><a href="">Korukkupet(0)</a></li>
                <li><a href="">Perambur(0)</a></li>
                <li><a href="">Villivakkam(0)</a></li>
            </ul>
        </div>
        <div id="app">
            <img src="../images/getTheZomatoAPP.webp" title="app link" height="450">
            <h2>Get the Zomato App</h2>
            <p>We will send you a link, open it on your phone to download the app</p>
            <form>

                <input type="text" placeholder="Email" id="mailfild">
                <input type="submit" value="Share App link" id="submitfild">
            </form>
            <div id="applink">
                <img src="../images/5a902db97f96951c82922874%20copy.png" alt="play store" id="ios1">
                <img src="../images/5a902dbf7f96951c82922875%20copy.png" alt="app store" id="android1">
            </div>
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
    </section>
    <footer>
        <h1>zomoto</h1>

        <div id="company">
            <ul>
                <h2>COMPANY</h2>
                <li><a href="">Who We Are</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="">Report Fraud</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>

        <div id="foodies">
            <ul>
                <h2>FOR FOODIES</h2>
                <li><a href="">Code of Conduct</a></li>
                <li><a href="">Community</a></li>
                <li><a href="">bloger</a></li>
                <li><a href="">developer</a></li>
                <li><a href="">mobile apps</a></li>
            </ul>
        </div>

        <div id="restaurant">
            <ul>
                <h2>FOR RESTAURANT</h2>
                <li><a href="../../hotel_management/admin/index.php">for restaurant</a></li>
                <li><a href="">claim your listing</a></li>
                <li><a href="">business app</a></li>
                <li><a href="">restaurant widgets</a></li>
                <li><a href="">products for businesses</a></li>
            </ul>
        </div>

        <div id="foryou">
            <ul>
                <h2>FOR YOU</h2>
                <li><a href="">privacy</a></li>
                <li><a href="">terms</a></li>
                <li><a href="">security</a></li>
                <li><a href="">sitemap</a></li>
            </ul>
        </div>
        <div id="sociallink">
            <h3>SOCIAL LINK</h3>
            <ul>
                <li><a href=""><img src="../images/logo-facebookpng-32247.png" alt="facebook" id="fb"></a></li>
                <li><a href=""><img src="../images/6743066.png" alt="twitter" id="twt"></a></li>
                <li><a href=""><img src="../images/6980677.png" alt="instagram" id="insta"></a></li>
            </ul>
            <a href=""><img src="../images/5a902db97f96951c82922874.png" alt="play store" id="ios"></a>
            <a href=""><img src="../images/5a902dbf7f96951c82922875.png" alt="app store" id="android"></a>
        </div>
        <div id="copyrigth">
            <p>By continuing past this page, you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content Policies. All trademarks are properties of their respective owners. 2008-2021 © Zomato™ Pvt Ltd. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>