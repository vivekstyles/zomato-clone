

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style/login.css">
    <title>Login</title>
</head>

<body>
    <header>
        <img src="../../home/images/zomoto_login.jpeg" alt="home img" height="522px" width="1440px">
    </header>
    <main>
        <div id="main">
            <h1>Login</h1>
            <div id="close-button">
                <a href="../../home/view/index.php">X</a>
            </div>
            <form action="." method="post">

                <input type="hidden" name="action" value="login_data">

                <div id="email">
                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email" placeholder="Email" autofocus required><br>
                </div>

                <div id="password">
                    <label for="email">Password :</label>
                    <input type="password" name="password" id="email" placeholder="Password" required><br>
                </div>

                <div id="error_message">
                    <?php echo "<p>$error_message</p>"; ?>
                </div>

                <div id="login">
                    <input type="submit" value="Login">
                </div>
                <div id="account">
                    <p>New to Zomato? <a href="index.php?action=signup">Create account</a></p>
                </div>
            </form>
        </div>
        <div id="orders">
            <ul>
                <li>
                    <p><img src="../../home/images/order_food_online.webp" width="270" height="190"><a href="index.php">Order food online</a> </p>
                </li>
                <li>
                    <p><img src="../../home/images/go_out_for_a_meal.webp" width="270" height="190"><a href="index.php">Go out for a meal</a> </p>
                </li>
                <li>
                    <p><img src="../../home/images/Nightlife&Clubs.jpeg" width="270" height="190"><a href="index.php">Nightlife &amp; Clubs</a> </p>
                </li>
                <li>
                    <p><img src="../../home/images/zomato_pro.webp" width="270" height="190"><a href="index.php">Zomato Pro</a> </p>
                </li>
            </ul>
        </div>
    </main>
</body>

</html>