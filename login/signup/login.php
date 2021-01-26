<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style/login.css">
    <title>Login</title>
</head>
<body>
<main>
    <h1>Login</h1>
    <form action="." method="post">

            <input type="hidden" name="action" value="login_data">

        <div id="email">
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" placeholder="Email" required><br>
        </div>

        <div id="password">
            <label for="email">Password :</label>
            <input type="text" name="password" id="email" placeholder="Password" required><br>
        </div>

        <div id="error_message">
            <?php echo "<p>$error_message</p>"; ?>
        </div>

        <div id="login">
            <input type="submit" value="Login">
        </div>
        <div id="account">
            <p>New to Zomato? <a href="signup.php">Create account</a></p>
        </div>
    </form>
</main>
</body>
</html>
