<?php
include('./config/db.php'); 
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="myorder-container">
                <p class="myorder-heading">Order #12</p>
                <div class="order-shipping-info">
                    <p class="details-order-heading">Shipping info</p>
                    <ul class="order-info-item">
                        <li class="order-info-list">
                            <p>First Name</p>
                            <span>Luan</span>
                        </li>
                        <li class="order-info-list">
                            <p>Last Name</p>
                            <span>Nguyen</span>
                        </li>
                        <li class="order-info-list">
                            <p>Address</p>
                            <span>Da Nang</span>
                        </li>
                        <li class="order-info-list">
                            <p>Phone</p>
                            <span>0362821110</span>
                        </li>
                        <li class="order-info-list">
                            <p>Email</p>
                            <span>ahu@gmail.com</span>
                        </li>
                        <li class="order-info-list">
                            <p>Total</p>
                            <span>$500</span>
                        </li>
                    </ul>
                </div>
                <div class="order-shipping-info">
                    <p class="details-order-heading">Payment</p>
                    <span class="order-shipping-info-status pay">NOT PAID</span>
                </div>
                <div class="order-shipping-info">
                    <p class="details-order-heading">Order Status</p>
                    <span class="order-shipping-info-status">Processing</span>
                </div>
                <div class="order-shipping-info">
                    <p class="details-order-heading">Order Items</p>
                    <ul class="order-shipping-info-product-item">
                        <li class="order-shipping-info-product-list">
                            <div class="order-shipping-info-product-img">
                                <img src="./assets/img/cate1.png" alt="" width="50px" height="50px" style="object-fit: cover;">
                            </div>
                        </li>
                        <li class="order-shipping-info-product-list">
                            <p class="order-shipping-info-product-name">Coby Coffee Table</p>
                        </li>
                        <li class="order-shipping-info-product-list">
                            <p class="order-shipping-info-product-total">$30</p>
                        </li>
                        <li class="order-shipping-info-product-list">
                        <p class="order-shipping-info-product-total">1 Piece(s)</p>
                        </li>
                    </ul>
                </div>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div> 
    <script src="assets/js/emtycart.js"></script>
    <script src="assets/js/cart.js"></script>  
</body>
</html>