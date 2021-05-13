<?php
    if (empty($_SESSION['user_name'])) {
        # code...
        header('Location:../../login/signup/index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main_dinning.css">
    <link rel="stylesheet" href="../style/reviews.css">
    <script src="../js/profile.js"></script>
    <title>profile</title>
</head>
<body>
<header id="header-1">
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
            <li><img src="../../home/images/wine_2x.png.jpeg" alt=""></li>
            <li id="user-name"><a href=""><?php echo $_SESSION['user_name'];?></a>
                <ul>
                    <li><a href="">Profile</a></li>
                    <li><a href="">Notifications</a></li>
                    <li><a href="">Bookmarks</a></li>
                    <li><a href="">Reviews</a></li>
                    <li><a href="">Network</a></li>
                    <li><a href="">Find friends</a></li>
                    <li><a href="">Settings</a></li>
                    <li><a href="../../home/view/index.php?action=logout">Log out</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <header id="header-2">
        <img src="../../dinning/images/55B801BD-2DF7-4B6C-9151-2B403DAB975D_4_5005_c.jpeg" alt="background-image">
        <div id="profile-details">
            <img src="../../home/images/wine_2x.png.jpeg" alt="user-logo">
            <h3><?php echo $_SESSION['user_name'];?></h3>
            <p>Chennai</p>
        </div>
        <div id="edit-profile">
            <button>Edit profile</button>
            <div class="nest-edit-tag">
                <h3>0</h3>
                <p>Reviews</p>
            </div>
            <div class="nest-edit-tag">
                <h3>0</h3>
                <p>Photos</p>
            </div>
            <div class="nest-edit-tag">
                <h3>0</h3>
                <p>Followers</p>
            </div>
        </div>
    </header>
    <main>
        <section id="section-1">
            <ul>
                <li><p>Activity</p>
                    <ul>
                        <li id="nested-ul"><a href="index.php?aside=reviews">Reviews</a></li>
                        <li><a href="index.php?aside=photos">Photos</a></li>
                        <li><a href="index.php?aside=followers">Followers</a></li>
                        <li><a href="index.php?aside=viewed">Recently Viewed</a></li>
                        <li><a href="index.php?aside=bookmarks">Bookmarks</a></li>
                        <li><a href="index.php?aside=blog">Blog Posts</a></li>
                    </ul>
                </li>
                <li><p>Online Ordering</p>
                    <ul>
                        <li><a href="index.php?aside=order">Order History</a></li>
                        <li><a href="index.php?aside=addresses">My addresses</a></li>
                        <li><a href="index.php?aside=favoriteorders">Favorite Orders</a></li>
                    </ul>
                </li>
                <li><p>Payments</p>
                    <ul>
                        <li><a href="">Zomato Credits</a></li>
                        <li><a href="">Manage Wallets</a></li>
                        <li><a href="">Manage Cards</a></li>
                    </ul>
                </li>
                <li><p>Table Booking </p>
                    <ul>
                        <li><a href="">Your Bookings</a></li>
                    </ul>
                </li>
                <li><p>Suggested foodies to follow</p>
                    <ul>
                        <li><img src="" alt=""></li>
                        <li>Abhilash Mithren</li>
                        <li>Reviews2.2K Followers</li>
                        <li><img src="" alt=""></li>
                    </ul>
                </li>
                <li><p>Suggested foodies to follow</p>
                    <ul>
                        <li>Zomato profile widget</li>
                        <li><img src="../image/414E1C37-228D-4F4F-A740-E6A59D54F8EB_4_5005_c.jpeg" width="85%" alt=""></li>
                        <li><a href="">Get this widget</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <section id="section-2">
        <?php
            if ($aside === 'reviews') {
                # code...
                include '../view/activty/reviews.php';
            }elseif ($aside === 'photos') {
                # code...
                include '../view/activty/photos.php';
            }elseif ($aside === 'followers') {
                # code...
                include '../view/activty/followers.php';
            }elseif ($aside === 'viewed') {
                # code...
                include '../view/activty/recently_viewed.php';
            }elseif ($aside === 'bookmarks') {
                # code...
                header('location:.');
            }elseif ($aside === 'blog') {
                # code...
                include '../view/activty/blog_post.php';
            }
            elseif ($aside === 'order') {
                # code...
                include '../view/online_ordering/order_history.php';
            }
            elseif ($aside === 'addresses') {
                # code...
                include '../view/online_ordering/my_addresses.php';
            }
            elseif ($aside === 'favoriteorders') {
                # code...
                include '../view/activty/blog_post.php';
            }
        ?>
        </section>
    </main>
</body>
</html>