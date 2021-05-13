<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style/signup.css">
    <title>signup page</title>
</head>
<body>
<header>
        <img src="../../home/images/zomoto_login.jpeg" alt="home img" height="522px" width="1440px">
</header>
<main>
    <div id="main">
        <h1>Signup</h1>
        <div id="close-button">
        <a href="../../home/view/index.php">X</a>
        </div>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="insert_data">


            <div id="name">
                <label for="name">Full name:</label>
                <input type="text" name="fullname" id="name" placeholder="Full name" required><br>
            </div>


            <div id="email">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Email" required><br>
            </div>


            <div id="password">
                <label for="Password">Password:</label>
                <input type="text" name="password" id="Password" placeholder="Password" required><br>
            </div>

            <div id="error_message">
                <?php echo "<p>$error_message</p>";?>
                <input type="checkbox" name="terms" id="terms">
                <label for="terms" >I agree to Zomato's <a href=""> Terms of Service, Privacy Policy </a>
                    and <a href="">Content Policies</a></label>
            </div>
            <div id="submit">
                <input type="submit" value="signup">
            </div>
        <div id="account">
            <p>already have an account? <a href="index.php?action=login">Login</a></p>
        </div>
        </form>
    </div>
    <div id="orders">
        <ul>
        <li><p><img src="../../home/images/order_food_online.webp" width="270" height="190"><a href="index.php">Order food online</a> </p></li>
        <li><p><img src="../../home/images/go_out_for_a_meal.webp" width="270" height="190"><a href="index.php">Go out for a meal</a> </p></li>
        <li><p><img src="../../home/images/Nightlife&Clubs.jpeg" width="270" height="190"><a href="index.php">Nightlife &amp; Clubs</a> </p></li>
        <li><p><img src="../../home/images/zomato_pro.webp" width="270" height="190"><a href="index.php">Zomato Pro</a> </p></li>
        </ul>
    </div>
</main>
</body>
</html>
