<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style/main.css">
	<link rel="stylesheet" href="../style/footer.css">
	<title>zomato for business</title>
</head>

<body>
	<!--  header starts -->
	<header>
		<a href="../../home/view/index.php"><img src="../image/C98E17D5-F0DC-4F51-8641-8FCB1F5AE319_1_105_c.jpeg" height="425em" width="1440em" alt=""></a>
		<!-- <img src="../image/6E8537AB-3D0B-490D-89F3-32F752F83E4E_4_5005_c.jpeg" alt="" id="zomoto-logo"> -->
		<h2>zomoto</h2>
		<h3>for business</h3>
		<nav>
			<ul>
				<li><a href="">Products</a></li>
				<li><a href="">Add a Restaurant</a></li>
				<li><a href="">Contact us</a></li>
				<?php if (!empty($_SESSION['user_name'])) : ?>
					<li><a href=""><img src="../../order_food_online/Image/wine_2x.png.jpeg" alt="">
							<p><?php echo $_SESSION['user_name']; ?></p>
						</a></li>
				<?php endif; ?>
			</ul>
		</nav>
		<div id="partner-tag">
			<h1>Partner with Zomato</h1>
			<p>for free and get more customers!</p>
			<!-- <input type="button" id="button-1" name="action" value="Restaurant already listed?"> -->
			<form action="." method="GET">
				<button id="button-1" name="action" value="register">Register your restaurant</button><button id="button-2" name="action" value="listed_Restaurant">Restaurant already listed? Claim now</button>
			</form>
		</div>
	</header>
	<!-- header ends -->
	<!--  ---------------------------------------------  -->
	<!-- main starts -->
	<main>
		<div id="partner-zomato-tag">
			<h1>Why should you partner with Zomato?</h1>
			<p id="partner-p1"> Zomato enables you to get 60% more revenue, 10x new customers and </p>
			<p id="partner-p2">boost your brand visibility by providing insights to improve your businenss.</p>
			<ul>
				<li><img src="../image/9CE9B107-E050-4018-B9D0-EC076A858F27_4_5005_c.jpeg" alt="">
					<ul>
						<li class="list-1">500+ cities</li>
						<li class="list-2">in India</li>
					</ul>
				</li>
				<li><img src="../image/2674309A-D87E-4CB1-A0E5-67A2693939FA_4_5005_c.jpeg" alt="">
					<ul>
						<li class="list-1">2.5 lakhs+</li>
						<li class="list-2">restaurant listings</li>
					</ul>
				</li>
				<li><img src="../image/3AFB5832-12D4-4496-8314-BC26E53571D2_4_5005_c.jpeg" alt="">
					<ul>
						<li class="list-1">4 crore+</li>
						<li class="list-2">monthly orders</li>
					</ul>
				</li>
			</ul>
		</div>
		<img src="../image/145B1D98-7F03-49D9-83F1-340A176F3E3B_4_5005_c.jpeg" width="1440em" alt="" id="main-image-2">
		<div id="how-it-work-tag">
			<h1>How it works?</h1>
			<ul>
				<li>
					<ul>
						<li class="step-1-img-tag"><img src="../image/9D19A9F3-850A-4EF2-94AD-337E1D55C018_4_5005_c.jpeg" alt=""></li>
						<li class="step-1-heading-tag">
							<h3>Step 1</h3>
						<li class="step-1-heading4-tag">
							<h4>Create your page on Zomato</h4>
						</li>
						<li class="step-1-para-tag">
							<p>Help users discover your place by creating a listing on Zomato</p>
						</li>
					</ul>
				</li>
				<li>
					<ul>
						<li class="step-1-img-tag"><img src="../image/A92AF9FE-887E-4E46-8C8E-A59FAFAF3B6C_4_5005_c.jpeg" alt=""></li>
						<li class="step-1-heading-tag">
							<h3>Step 2</h3>
						<li class="step-1-heading4-tag">
							<h4>Register for online ordering</h4>
						</li>
						<li class="step-1-para-tag">
							<p>And deliver orders to millions of customers with ease</p>
						</li>
					</ul>
				</li>
				<li>
					<ul>
						<li class="step-1-img-tag"><img src="../image/EEAF4ADD-55E2-4C04-85F8-F9ABAB4CE036_4_5005_c.jpeg" alt=""></li>
						<li class="step-1-heading-tag">
							<h3>Step 3</h3>
						<li class="step-1-heading4-tag">
							<h4>Start receiving orders online</h4>
						</li>
						<li class="step-1-para-tag">
							<p>Manage orders on our partner app, web dashboard or API partners</p>
						</li>
					</ul>
				</li>
			</ul>
		</div>

		<div id="listed-tag">
			<img src="../image/BDA8E695-56F9-4480-BB72-5E75C4E10EBE.jpeg" width="1440em" alt="">
			<h1>Already have your restaurant listed?</h1>
			<p>Search here and claim the ownership of your restaurant</p>
			<div id="search-bar-tag">
				<form action="">
					<input type="text" value="Delhi NCR" placeholder="Delhi NCR" id="input-1">
					<input type="text" placeholder="Search for your restaurant, eg. Greenland Cafe" id="input-2">
				</form>
			</div>
		</div>

		<div id="product-tag">
			<h1>Our products</h1>
			<ul>
				<li class="product-list-1">
					<ul class="product-unorderlist">
						<li><img src="../image/6A882EA2-A227-436E-B1F1-9307BFB27225_4_5005_c.jpeg" alt=""></li>
						<li class="h1-list">
							<h2>Listings</h2>
						</li>
						<li class="para-list">A free app that allows you to manage your Zomato listing directly from your smartphone</li>
						<li class="link-list"><a href="">Learn more</a></li>
					</ul>
				</li>
				<li class="product-list-1">
					<ul class="product-unorderlist">
						<li><img src="../image/7B1B8F07-BE0D-4218-8E19-E33F6A826F70_4_5005_c.jpeg" alt=""></li>
						<li class="h1-list">
							<h2>Online Ordering</h2>
						</li>
						<li class="para-list">Start taking orders online from millions of users near you and deliver with Zomato...</li>
						<li class="link-list"><a href="">Learn more</a></li>
					</ul>
				</li>
				<li class="product-list-1">
					<ul class="product-unorderlist">
						<li><img src="../image/55D606D8-0DB0-4173-9EFF-42CAD91F5CD7_4_5005_c.jpeg" alt=""></li>
						<li class="h1-list">
							<h2>Pro</h2>
						</li>
						<li class="para-list">Drive more users to dine-in at your place by partnering with Zomato’s loyalty program</li>
						<li class="link-list"><a href="">Learn more</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div id="sign-up-tag">
			<h1>What do you get on sign-up</h1>
			<p>Zomato Partner Platform helps you take your business to new heights instantly with no hassle and 100% transparency!</p>
			<div class="sign-up-div">
				<h2><span>1</span> Merchant App</h2>
				<p>Get Zomato Partner App and manage your outlet on your smartphone</p>
			</div>
			<div class="sign-up-div">
				<h2><span>2</span> Web Dashboard</h2>
				<p>Manage all your orders on our all new restaurant partner dashboard</p>
			</div>
			<div class="sign-up-div">
				<h2><span>3</span> API integration</h2>
				<p>Integration with third party APIs to manage all your orders at one place</p>
			</div>
			<div id="backgound-img">
				<img src="../image/D6D05303-DAF9-4FCB-9317-9107C917188C.jpeg" alt="" id="back-img">
				<img src="../image/0E4FCD8C-4974-43BC-B5FC-44B9B74AFB3E.jpeg" width="200em" height="400em" alt="" id="phone-img">
			</div>
			<div id="journey-tag">
				<img src="../image/04CE97CE-0F81-45C4-A16C-379416265AE6_4_5005_c.jpeg" alt="">
				<h1>Start your journey with Zomato</h1>
				<p>Create your restaurant page and register for online ordering</p>
				<button>Start now</button>
			</div>
			<div id="faq-tag">
				<h1>Frequently asked questions</h1>
				<ul>
					<li>What will Zomato charge me for creating a page on its platform?
						<ul>
							<li id="faq-nest-tag">Creating a restaurant page on Zomato is free of cost. You can maintain your page by replying to reviews and do a lot more without any charges.</li>
						</ul>
					</li>
					<li>What all documents are required for registering on online ordering?
						<ul>
							<li id="faq-nest-tag">Registration for online ordering requires:
								<br> a: FSSAI certificate (application no. if FSSAI is not present)
								<br> b: PAN Card
								<br> c: GST certificate (if applicable)
							</li>
						</ul>
					</li>
					<li>I have a large fleet of delivery boys, why should I use Zomato’s delivery service?
						<ul>
							<li id="faq-nest-tag">You can use your and Zomato's delivery fleet simultaneously to increase the network of your delivery radius. Also, our delivery fleet delivers orders in minimum possible time, a key factor leading to increased customer satisfaction.</li>
						</ul>
					</li>
					<li>What happens if the average order value of Zomato orders is very low
						<ul>
							<li id="faq-nest-tag">Average order value from our platform is generally more than Rs 250. However, in some cases, users want to try out your place by ordering for lesser amount. But we have observed that they eventually come back with higher value orders if they like your food.</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

		<div id="know-more-tag">
			<img src="../image/145B1D98-7F03-49D9-83F1-340A176F3E3B_4_5005_c.jpeg" height="560em" width="1440em" alt="">
			<div id="know-more-neat-tag">
				<h1>Want to know more?</h1>
				<p>Please leave your contact details and<br>we’ll be in touch within 24 hours</p>
				<a href="">or send us your query at</a>
				<br>
				<a href="" id="contact-link-tag">restaurants@zomato.com</a>
			</div>
			<div id="enquary-input-tag">
				<form action="." method="POST">
					<input type="hidden" name="action" value="contact">
					<input type="text" name="fullName" placeholder="Your full name"><br>
					<input type="text" name="phoneNo" placeholder="Phone number"><br>
					<input type="text" name="email" placeholder="Email id"><br>
					<input type="text" name="restaurantName" placeholder="Restaurant name"><br>
					<input type="text" name="city" placeholder="City"> <br>
					<input type="submit" value="Contact me" onclick="alert('hello world!')" id="submit">
					<?php echo '<p>' . $error_message . '</p>'; ?>
				</form>
			</div>
		</div>
		<!-- <div id="login-form">
			<form action="." method="post"><br>
				<input type="hidden" name="action" value="signup">
				<label for="email">Email</label>
				<input type="text" name="email" id='email'><br>
				<label for="name">Hotel Name</label>
				<input type="text" name="hotelName" id="name"><br>
				<label for="adrs">Address</label>
				<input type="text" name="address" id="adrs"><br>
				<label for="loc">location</label>
				<input type="text" name="loaction" id="loc"><br>
				<label for="city">City</label>
				<input type="text" name="city" id="city"><br>
				<p><?= $error_message; ?></p>
				<input type="submit" value="create" id="submit">
			</form>
		</div> -->
	</main>
	<?php include '../view/footer.php'; ?>
</body>

</html>