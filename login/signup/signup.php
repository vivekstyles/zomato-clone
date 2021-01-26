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
    <main>
    <h1>Signup</h1>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="insert_data">


        <div id="name">
            <label>Full name:</label>
            <input type="text" name="fullname" placeholder="Full name" required><br>
        </div>


        <div id="email">
            <label>Email:</label>
            <input type="text" name="email" placeholder="Email" required><br>
        </div>


        <div id="password">
            <label>Password:</label>
            <input type="text" name="password" placeholder="Password" required><br>
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
            <p>already have an account? <a href="login.php">Login</a></p>
        </div>
    </form>
    </main>
</body>
</html>
