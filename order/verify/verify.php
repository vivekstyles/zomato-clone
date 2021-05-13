<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/verify.css">
    <title>Verify</title>
</head>
<body>
    <header>
        <div id="title">
            <a href="">Back to Restaurant</a>
            <img src="../../image/zomoto_logo.jpeg" alt="">
            <ul>
                <li><img src="../../order_food_online/Image/wine_2x.png.jpeg" alt=""></li>
                <li>Vivek</li>
            </ul>
        </div>
    </header>
    <main>
        <h1>Secure Checkout</h1>
        <section>
            <div id="first-container">
                <h2>Vivek <span>(iamvivekstyle@gmail.com)</span></h2>
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
            <?php for ($i=0; $i < 3 ; $i++) :?>
                <ul>
                    <li>Paneer Butter Masala</li>
                    <li id="price-list-tag">₹110</li>
                    <li>Portion : Qtr</li>
                </ul>
                <div id="qunatiy">
                    <form action="">
                        <input type="button" name="" value="-" class="min-and-max">
                        <input type="text" name="" value="1">
                        <input type="button" name="" value="+" class="min-and-max">
                    </form>
                </div>
                <p>₹120.00</p>
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
                        <td class="subtotal-1">₹330.00</td>
                    </tr>
                    <tr>
                        <td class="tax">Taxes & charges</td>
                        <td class="tax-1">₹48.00</td>
                    </tr>
                    <tr>
                        <div id="last-row">
                            <td class="grandtotal">Grand Total</td>
                            <td class="grandtotal-1">₹378.00</td>
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