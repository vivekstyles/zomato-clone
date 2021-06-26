<section class="dont_view_details" id="view_details"> <!-- dont_view_details-->
    <div class="container-fluid position-fixed bottom-0 bg-white shadow">
        <div class="row pb-5">
            <div class="col-1">
                
            </div>
            <div class="col-10 mt-4">
                <h1 class="display-3 fw-normal fs-3 d-inline">Your Orders</h1>
                <button type="button" class="btn btn-white dropdown-toggle d-inline float-end px-3 py-0" id="close_container" data-toggle="button" aria-pressed="false" autocomplete="off"></button>
                <hr class="my-2">
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled" id="list">
                        <!-- <li class=" fs-5 p-1 mt-1 text-dark text-capitalize">dfg</li> -->
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled" id="price">

                        </ul>
                        <ul class="list-unstyled" id="mobile">

                        </ul>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</section>


<section class="dont_show_item" id="show_item">
    <div class="container-fluid position-fixed bottom-0 mx-0 px-0">
        <div class="row">
            <div class="col-1 bg-light">
                    <!-- empty coloumn -->
            </div>
            
            <div class="col-5 bg-light py-2 d-flex flex-row">
                <div class="dropup">
                    <button class="btn btn-secondary dropdown-toggle bg-danger align-content-center mt-1 mb-2 ms-3" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"></button>
                    <p class=" d-inline fw-normal fs-5 align-content-center mt-1 mb-2">Your Order (<span id="yrOrd">0</span>)</p>
                </div>
            </div>
            <div class="col-5 bg-light py-2 d-flex flex-row">
                <p class=" d-inline fw-normal fs-5 mt-2 mb-2 mx-2">subtotal:₹<span id="subtotal">0.00</span></p>
                <form action="./../add_orders/index.php" method="GET" id="form">
                    <!-- <button type="button" class="btn btn-danger d-inline flex-lg-row-reverse align-content-center mt-1 mb-2 px-5 py-2 fw-normal" id="btn" data-toggle="button" aria-pressed="false" autocomplete="off">continue</button> -->
                    <input type="hidden" name="action" value="cart">
                    <input type="submit" class="btn btn-danger d-inline flex-lg-row-reverse align-content-center mt-1 mb-2 px-5 py-2 fw-normal" value="continue" placeholder="continue" id="btn">
                </form>
            </div>

            <div class="col-1 bg-light">
                    <!-- empty coloumn -->
            </div>
        </div>
    </div>
</section>