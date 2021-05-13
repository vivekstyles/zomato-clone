<section id="section-2">
            <nav>
                <ul>
                    <li><a href="">Overview</a></li>
                    <li><a href="">Order Online</a></li>
                    <li><a href="">Reviews</a></li>
                    <li><a href="">Menu</a></li>
                    <li><a href="">Photos</a></li>
                </ul>
            </nav>
            <aside>
                <ul>
                    <li>Recommended (35)</li>
                    <li>Leon Burgers (12)</li>
                    <li>Burger Combos (6)</li>
                    <li>Leon Pastas (4)</li>
                    <li>London Doners (10)</li>
                    <li>London Doners (10)</li>
                    <li>London Doners (10)</li>
                    <li>London Doners (10)</li>
                    <li>London Doners (10)</li>
                    <li>London Doners (10)</li>
                </ul>
            </aside>
            <main>
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
                <?php for ($i=0; $i < 3; $i++) :?>
                <div class="food-list">
                    <img src="../../image/image/0AE6E63E-E446-41B9-82AC-9CD66DB27AFB_4_5005_c.jpeg" alt="">
                    <ul>
                        <li><h3>Peri-Peri Chicken Burger</h3></li>
                        <li><p>₹180</p></li>
                        <li><p id="p-dis">4/6 Members :-4/6 Nos Mayo Burger+2/3 Nos Chicken Popcorn+4/6 Portions French Fries+1.25 liter ... <span>read more</span></p></li>
                    </ul>
                    <form action="">
                        <input type="submit" value="add +">
                    </form>
                </div>

                <div class="food-list">
                    <img src="../../image/image/B0982CE8-2E0D-4922-B0A6-91D70BEBC812_4_5005_c.jpeg" alt="">
                    <ul>
                        <li><h3>Peri-Peri Chicken Burger</h3></li>
                        <li><p>₹180</p></li>
                        <li><p id="p-dis">4/6 Members :-4/6 Nos Mayo Burger+2/3 Nos Chicken Popcorn+4/6 Portions French Fries+1.25 liter ... <span>read more</span></p></li>
                    </ul>
                    <form action="">
                        <input type="submit" value="add +">
                    </form>
                </div>
                <div class="food-list">
                    <img src="../../image/image/C85E96B7-2A3C-4CC0-A9AA-A6774ED7EC3B_4_5005_c.jpeg" alt="">
                    <ul>
                        <li><h3>Peri-Peri Chicken Burger</h3></li>
                        <li><p>₹180</p></li>
                        <li><p id="p-dis">4/6 Members :-4/6 Nos Mayo Burger+2/3 Nos Chicken Popcorn+4/6 Portions French Fries+1.25 liter ... <span>read more</span></p></li>
                    </ul>
                    <form action="">
                        <input type="submit" value="add +">
                    </form>
                </div>
                <?php endfor; ?>
            </main>
        </section>