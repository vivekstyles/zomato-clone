<?php

?>
<aside id="viewed-aside">
    <h2>Recently Viewed restaurant</h2>
    <div id="viewed-tag">
        <ul>
            <?php for ($i=0; $i < count($_SESSION['recentView']) ; $i++) :?>
                <?php foreach($_SESSION['recentView'][$i] as $key => $value):?>
            <ul>
                <li><img <?php echo 'src="data:image/jpeg;base64,'.base64_encode($value['img']).'"'; ?> alt="banner" title='banner' height="384"></li>
                <li><?php echo $value['item'];?></li>
                <li>4.1 <span>(407) |</span>4.3<span>(11.3)</span></li>
                <li><span>st Marks Road chennai</span></li>
            </ul>
            <?php endforeach ?>
            <?php endfor ?>
    </div>
    <div id="main-continer">
        <!-- <img src="../image/c33e5cd0b755a03f9b2f374b1b8271a91581004801.png" alt=""> -->
        <!-- <p>Nothing here yet</p> -->
    </div>
</aside>