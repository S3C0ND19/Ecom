<?php
include('./config/db.php');
$info = mysqli_query($conn,"SELECT * FROM purchase inner join user on  purchase.purchase_user_id  = user.user_id WHERE purchase_user_id=user_id ORDER BY purchase_user_id DESC LIMIT 1");
$order_details = '';
$total = 0;
if(!empty($_SESSION["shopping_cart"])){
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
        $order_details.= '  
            <div class="success-cart-wrapper">
                <div class="info-product">
                        <div class="cart-product-thumble">
                            <img  src="./admin/upload/'.$values["item_img"].'" alt="">
                        </div>
                        <div class="cart-product-name">
                            <p>'.$values["item_name"].'</p>
                            <span class="cart-product-quantity">Quantity: 1</span>
                        </div>
                    </div>
                    <div class="cart-product-total">
                        <span>'.$values["item_price"].'$</span>
                    </div>
            </div>
    ';
    $total = $total + floatval($values["item_price"]);
    }
}
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="success-container">
                <div class="success-heading">
                    <i class="fas fa-check"></i>
                    <p>Thank you! Your order has been placed</p>
                </div>
                <div class="success-content">
                    <div class="grid">
                        <div class="row">
                            <div class="col l-8">
                                <div class="success-content">
                                <?php foreach ($info as $key => $value): ?>     
                                    <div class="success-order-wrapper">
                                        <p class="success-order-heading">Your order is : <?php echo $value['purchase_id']; ?></p>
                                        <p class="success-order-details">An email receipt including the detail's about your order has been sent to sample@gmail.com</p>
                                    </div>
                                    <div class="success-order-wrapper">
                                        <p class="success-order-heading">Đơn hàng sẽ được gửi đến địa chỉ:</p>
                                        <ul class="success-order-item">
                                            <li class="success-order-list">
                                                <span class="success-order-details">First Name: <?php echo $value['firstname']; ?></span>
                                            </li>
                                            <li class="success-order-list">
                                                <span class="success-order-details">Last Name: <?php echo $value['lastname']; ?></span>
                                            </li>
                                            <li class="success-order-list">
                                                <span class="success-order-details">Mail: <?php echo $value['email']; ?></span>
                                            </li>
                                            <li class="success-order-list">
                                                <span class="success-order-details">Address: <?php echo $value['address']; ?></span>
                                            </li>
                                            <li class="success-order-list">
                                                <span class="success-order-details">City: <?php echo $value['city']; ?></span>
                                            </li>                                
                                            <li class="success-order-list">
                                                <span class="success-order-details">Phone: <?php echo $value['phone']; ?></span>
                                            </li>
                                            <li class="success-order-list">
                                                <span class="success-order-details">Postcode: <?php echo $value['postcode']; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                <?php  endforeach ?>
                                    <div class="success-order-wrapper">
                                        <p class="success-order-heading">Đơn hàng sẽ được giao bởi:</p>
                                        <p class="success-order-details">Giao hàng tiết kiệm</p>
                                    </div>
                                    <div class="success-order-wrapper">
                                        <p class="success-order-heading">Phương thức thanh toán:</p>
                                        <p class="success-order-details">Vietcombank : 1001808677</p>
                                    </div>
                                    <div class="success-order-wrapper">
                                        <div class="success-order-question">
                                            <p class="success-order-heading">Question?</p>
                                            <p class="success-order-details">Have any questions about your order? Feel free to contact us <a href="">here</a> or call 234-235-2351</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="shop_paging.php" class="btn-success-back">BACK TO SHOP</a>
                            </div>

                            <div class="col l-4">
                                <div class="success-checkout-container">
                                    <div class="success-checkout">
                                        <p class="success-checkout-heading">Order Summary</p>
                                        <div class="cart-total__content">
                                                <div class="success-cart-item">
                                                    <?php  echo $order_details;?>
                                                </div>
                                                <div class="success-cart-total">
                                                    <div class="success-checkout-total">
                                                        <p class="success-order-details">Subtotal</p>
                                                        <p class="success-order-details">$<?php echo  $total ?></p>
                                                    </div>
                                                    <div class="success-checkout-total">
                                                        <p class="success-order-details">Shipping & Handling</p>
                                                        <p class="success-order-details" name="total">$12.00</p>
                                                    </div>
                                                    <div class="success-checkout-total">
                                                        <p class="success-order-details">Tax</p>
                                                        <p class="success-order-details" name="total">$12.00</p>
                                                    </div>
                                                    <div class="success-checkout-total">
                                                        <p class="success-order-details big">Grand Total</p>
                                                        <p class="success-order-details big" name="total">$<?php echo  $total ?></p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php include('includes/footer.php'); ?>
    </div>
    <script src="assets/js/cart.js"></script>
</body>
</html>