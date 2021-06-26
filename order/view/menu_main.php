<main class="dont_show" id="menu">
    <div class="container-fluid">
    <h1 class=" display-1 text-capitalize"><?php echo $hotelId[0]['Restaurant'];?> menu</h1>
    <br>
    <br>
    <hr>
        <div class="card-group">
        <?php $count = 0 ?>
        <?php foreach ($menuImage as $values):?>
        <?php $count++?>
            <div class="col-4 m -1">
            <?php echo '<img class="card-img-top size" src="data:image/jpeg;base64,'.base64_encode($values['image']).'">';?>
                <div class="card-body">
                    <h5 class="card-title pt-2">Menu</h5>
                    <p class=" p-0">Page <?php echo $count;?></p>
                </div>
            </div>
        <?php endforeach?>       
        </div>
    </div>
</main>