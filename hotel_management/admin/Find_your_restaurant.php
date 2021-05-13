<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/find_your_restaurant.css">
    <title>Find a restaurant - Zomato</title>
</head>
<body>
    <header>
        <div id="dark">

        </div>
        <div id="img-1">
            <a href="../../home/view/index.php"><img src="../image/3d432595dac7d2bda0b4cc41f6afe6ef1564646824.png" height="5%" width="8%" alt="" id="zomato-logo"></a>
            <ul>
                <li id="contact-tag"><a href="">Contact us</a></li>
                <li id="logo-tag"><a href=""><img src="../../order_food_online/Image/wine_2x.png.jpeg" alt="user-logo"></a></li>
                <li id="user-name-tag"><a href=""><?php echo $_SESSION['user_name'];?></a></li>
            </ul>
        </div>
        <img src="../image/7242FE55-ADF0-4665-8668-1124F45B731D_1_105_c.jpeg" height="400em" width="1440em" alt="" id="main-img">
        <div id="find-tag">
            <h1>Find your restaurant on Zomato</h1>
            <p>Check if your restaurant page already exists on Zomato</p>
            <form action="." method="GET">
                <input type="text" value="Delhi NCR" placeholder="Delhi NCR" id="input-1">
                <input type="text" placeholder="Search for your restaurant, eg. Greenland Cafe" id="input-2">
                <div id="drop-login-container">
                        <p>Can't find your restaurant in the list</p>
                        <form action="." method="GET">
                            <input type="submit" name="action" value="Create your restaurant page"> 
                        </form>
                </div>
            </form>
        </div>
    </header>
    <main>
        <img src="../image/80F3EA5C-C4F7-43DD-B37F-795A1C41FCDA.jpeg" height="425em" width="1440em" alt="">
        <div id="Benefits-tag">
            <h1>Benefits of partnering with Zomato?</h1>
            <p>Zomato enables you to get 60% more sales, 10x new customers and boosts your brand visibility <br> by providing insights to grow your business.</p>
            <ul id="unorder-list-tag">
				<li class="list-child">
					<ul>
						<li class="step-1-img-tag"><img src="../image/9D19A9F3-850A-4EF2-94AD-337E1D55C018_4_5005_c.jpeg" alt=""></li>
						<li class="step-1-heading-tag">500+ Cities</li>
						<li class="step-1-para-tag"> In India</li>
					</ul>
				</li>
				<li class="list-child"> 
					<ul>
						<li class="step-1-img-tag"><img src="../image/A92AF9FE-887E-4E46-8C8E-A59FAFAF3B6C_4_5005_c.jpeg" alt=""></li>
						<li class="step-1-heading-tag">2 Lakhs+</li>
						<li class="step-1-para-tag">Restaurant listings</li>
					</ul>
				</li>
				<li class="list-child"> 
					<ul>
						<li class="step-1-img-tag"><img src="../image/EEAF4ADD-55E2-4C04-85F8-F9ABAB4CE036_4_5005_c.jpeg" alt=""></li>
						<li class="step-1-heading-tag">2.6 Crore+</li>
						<li class="step-1-para-tag">Monthly Orders</li>
					</ul>
				</li>
                <li class="list-child"> 
					<ul>
						<li class="step-1-img-tag"><img src="../image/EEAF4ADD-55E2-4C04-85F8-F9ABAB4CE036_4_5005_c.jpeg" alt=""></li>
						<li class="step-1-heading-tag">7.5 Lakh+</li>
						<li class="step-1-para-tag">Daily Users</li>
					</ul>
				</li>
                <li class="list-child"> 
					<ul>
						<li class="step-1-img-tag"><img src="../image/EEAF4ADD-55E2-4C04-85F8-F9ABAB4CE036_4_5005_c.jpeg" alt=""></li>
						<li class="step-1-heading-tag">1.4 Lakh+</li>
						<li class="step-1-para-tag">Delivery Partners</li>
					</ul>
				</li>
			</ul>
        </div>
    </main>
</body>
</html>