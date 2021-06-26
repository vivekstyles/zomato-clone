<section id="section-2">
            <nav>
                <ul>
                    <li>Overview</li>
                    <li>Order Online</li>
                    <li>Reviews</li>
                    <li>Menu</li>
                    <li>Photos</li>
                </ul>
            </nav>
            <aside id="aside">
                <ul>
                    <li>Recommended (35)</li>
                    <?php foreach($category as $item):?>
                    <li><a href=""><?php echo $item['category'].' '.'('.$item['total'].')';?></a></li>
                    <?php endforeach;?>
                </ul>
            </aside>
            
            <main id="online" class="show">
                <h1>Order Online</h1>
                <div id="search-bar">
                    <form action="">
                        <input type="search" name="" id="" placeholder="search within menu">
                    </form>
                </div>
                <p>Live track your order | 32 min</p>
                <ul>
                    <li>
                        <div id="offer-container-1">
                            <h3>PRO extra 10% OFF</h3>
                            <p>Available on the App</p>
                        </div>
                    </li>
                    <li>
                        <div id="offer-container-2">
                            <h3>60% OFF up to ₹125</h3>
                            <p>use code HELLO60</p>
                        </div>
                    </li>
                    <li>
                        <div id="offer-container-3">
                            <h3>Flat 25% OFF</h3>
                            <p>use code UNLIMITED</p>
                        </div>
                    </li>
                </ul>
                <form action="">
                    <input type="checkbox" name="" id=""><span> veg only</span><br>
                </form>
                <h1 id="recommend-heading">Recommended</h1>

                <!-- php foreach starts here -->
                <?php foreach ($allFoods as $values):?>
                <div class="food-list" id="foods">
                <?php echo '<img width="350" height="250" src="data:image/jpeg;base64,'.base64_encode($values['img']).'">';?>

                    <ul>
                        <li><h3 class=" text-capitalize"><?php echo $values['item']; ?></h3></li>
                        <li><p class=" fs-6">₹<span class=" fs-6"><?php echo floatval(round($values['price'],2));?></span></p></li>
                        <li><p class=" d-none"><span><?php echo $values['imageID'];?></span></p></li>
                        <li><p id="p-dis"><?php echo substr($values['aboutfoot'],0,100);?><span> read more</span></p></li>
                    </ul>
                    
                        <!-- here in this session is used for display ordered food details  -->
                        <?php 
                        $_SESSION['orders'] = array();
                        $_SESSION['orders'] = Online_order_class::get_food_details_by_foodId($values['imageID']);
                        $lisItems = $_SESSION['orders'];
                        ?>

                        <input type="hidden" name="orderid" value="<?php foreach ($lisItems as $value) {echo $value['item'];
                    }?>" id="image_id">
                        <input type="submit" name="add" value="add +" id="submit">
                </div>
                <?php endforeach; ?>
            </main>
            <?php include '../view/menu_main.php' ?>
        </section>