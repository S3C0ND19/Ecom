<?php
include('./config/db.php');
if (isset($_POST['btncreate'])) {
    $firstname= $_POST['firstname'];
    $ord_prd_id= $_POST['ord_prd_id'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $note = $_POST['note'];
    $total = $_POST['total'];
    $query = "INSERT INTO purchase (firstname,ord_prd_id,lastname,address,city,postcode,email,phone,total,note) VALUES ('$firstname','$ord_prd_id','$lastname','$address','$city','$postcode','$email','$phone','$total','$note')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed.");
    }else {
        header('Location: success.php');
    }

}
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
                                    <div class="success-order-wrapper">
                                        <p class="success-order-heading">Your order # is : 100000147</p>
                                        <p class="success-order-details">An email receipt including the detail's about your order has been sent to sample@gmail.com</p>
                                    </div>
                                    <div class="success-order-wrapper">
                                        <p class="success-order-heading">This order will be shipped to</p>
                                        <ul class="success-order-item">
                                            <li class="success-order-list">
                                                <span class="success-order-details"><?php echo $firstname ?></span>
                                            </li>
                                            <li class="success-order-list">
                                                <span class="success-order-details">9302 Mapple Drive</span>
                                            </li>
                                            <li class="success-order-list">
                                                <span class="success-order-details">New York City, New York, 10001</span>
                                            </li>
                                            <li class="success-order-list">
                                                <span class="success-order-details">United States</span>
                                            </li>
                                            <li class="success-order-list">
                                                <span class="success-order-details">T: 555-555-1234</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="success-order-wrapper">
                                        <p class="success-order-heading">This order will be shipped to</p>
                                        <p class="success-order-details">Flat Rate 2 Title - Flat Rate 2 Method Name</p>
                                    </div>
                                    <div class="success-order-wrapper">
                                        <p class="success-order-heading">Payment Method</p>
                                        <p class="success-order-details">Check / Money Order</p>
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