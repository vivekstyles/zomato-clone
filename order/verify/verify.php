
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/verify.css">
    <script src="../js/verify.js"></script>
    <title>Verify</title>
</head>
<body>
<?php  unset($_SESSION['mob']);?>

    <!-- <?php foreach($_SESSION as $key => $value):?>
    <h1><?php echo$key?></h1>
    <?php endforeach; ?> -->

    <header>
        <div id="title">
            <a href="../add_orders/index.php?action=ViewHotel">Back to Restaurant</a>
            <img src="../../image/zomoto_logo.jpeg" alt="">
            <ul>
                <li><img src="../../order_food_online/Image/wine_2x.png.jpeg" alt=""></li>
                <li id="user-name" class=" text-capitalize"><?php echo $_SESSION['user_name'];?>
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
        </div>
    </header>
    <main>
        <h1>Secure Checkout</h1>
        <section>
            <div id="first-container">
                <h2><?php echo $_SESSION['user_name'];?> <span>(<?php echo $_SESSION['email_id'];?>)</span></h2>
                <p>You are securely logged in</p>
            </div>
            <div id="second-container">
                <h2>Delivery Address</h2>
                <div id="nest-second-container">
                    <input type="text" placeholder="+ Add new address">
                </div>
            </div>
            <div id="third-container">
                <h2>Select Payment Method</h2>
                <p>Select delivery address to select payment methods</p>
            </div>
        </section>
        <aside>
            <h2>Summary</h2>

            <div id="order-from-continer">
                <h4>ORDER FROM</h4>
                <h3>Empire Restaurant</h3>
                <p>Seshadripuram, Bangalore</p>
            </div>

            <div id="orders-continer">
                            <!-- fisrt for loop starts -->
            <?php for ($i=0; $i < count($_SESSION['verify_ord']) ; $i++) :?>
                            <!-- secound for loop starts -->

                <?php foreach($_SESSION['verify_ord'][$i] as $key => $value):?>
                <ul>
                    <li><?php echo $value['item']?></li>
                    <li>₹<span id="price-list-tag"><?php echo $value['price']?></span></li>
                    <li>Portion : Qtr</li>
                </ul>
                <div id="qunatiy">
                    <form action="">
                        <input type="button" name="" value="-" class="min-and-max min" id="minus">
                        <input type="text" name="" value="1" id="qty">
                        <input type="button" name="" value="+" class="min-and-max max" id="plus">
                    </form>
                </div>
                <p>₹<span class="total"><?php echo number_format($value['price'],2)?></span></p>
                <p class="none">₹<span class="total"><?php echo $value['price']?></span></p>
                <p class="none">1</p>

                <!-- secound for loop starts -->
                <?php endforeach; ?>

                <!-- fisrt for loop starts -->
                <?php endfor ?>
                <a href="">Add special cooking instructions</a>
            </div>

            <div id="support">
                <h3>SUPPORT YOUR RIDER</h3>
                <p>Your tip means a lot. It will be transferred in full with the rider’s weekly payout.</p>
                <button>+20</button>
                <button>+30</button>
                <button>+50</button>
            </div>

            <div id="offer">
                <h3><a href="">Offers</a></h3>
                <a href="">Select a promo code <span>View offers</span></a>
            </div>

            <div id="sub-total">
                <table>
                    <tr>
                        <td class="subtotal">Subtotal</td>
                        <td id="subtotal-1" class="subtotal-1">₹<span>0.00</span></td>
                    </tr>
                    <tr>
                        <td class="tax">Taxes & charges</td>
                        <td id="tax-1" class="tax-1">₹<span>48.00</span></td>
                    </tr>
                    <tr>
                        <div id="last-row">
                            <td class="grandtotal">Grand Total</td>
                            <td id="grandtotal-1" class="grandtotal-1">₹<span>0.00</span> </td>
                        </div>
                    </tr>
                </table>
            </div>
            <div id="ordering-for">
                <div id="ord-tag">
                    <h3>ORDERING FOR</h3>
                    <p>Add your details</p>
                </div>
                <p>ADD</p>
            </div>
            <div id="non-refund">
                <p>Orders once placed cannot be cancelled and are non-refundable.</p>
            </div>
            <div id="button">
                <button>Verify your phone</button>
            </div>
        </aside>
        </main>
</body>
</html>