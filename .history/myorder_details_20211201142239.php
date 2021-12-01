<?php
include('./config/db.php');
if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM  purchase WHERE purchase_id =$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $fname = $row['firstname'];
      $lname = $row['lastname'];
      $address = $row['address'];
      $phone = $row['phone'];
      $email = $row['email'];
      $total = $row['total'];
    }
  }
  $order  = mysqli_query($conn,"SELECT * FROM purchase
    inner join user on  purchase.purchase_user_id  = user.user_id
    inner join order_prd_id on user.user_id = order_prd_id.user_id 
    inner join product on order_prd_id.product_id = product.prd_id 
    WHERE purchase_id =$id   "); 
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">   
        <?php include('includes/nav.php'); ?>
            <div class="myorder-container">
                <p class="myorder-heading">Order #<?php echo $id; ?></p>
                <div class="order-shipping-info">
                    <p class="details-order-heading">Shipping info</p>
                    <ul class="order-info-item">
                        <li class="order-info-list">
                            <p>First Name:</p>
                            <span><?php echo $fname; ?></span>
                        </li>
                        <li class="order-info-list">
                            <p>Last Name:</p>
                            <span><?php echo $lname; ?></span>
                        </li>
                        <li class="order-info-list">
                            <p>Address:</p>
                            <span><?php echo $address; ?></span>
                        </li>
                        <li class="order-info-list">
                            <p>Phone:</p>
                            <span><?php echo $phone; ?></span>
                        </li>
                        <li class="order-info-list">
                            <p>Email:</p>
                            <span><?php echo $email; ?></span>
                        </li>
                        <li class="order-info-list">
                            <p>Total:</p>
                            <span>$<?php echo $total; ?>.00</span>
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
                    <?php foreach ($order as $key => $value): ?>    
                    <ul class="order-shipping-info-product-item">
                        <li class="order-shipping-info-product-list">
                            <div class="order-shipping-info-product-img">
                                <img src="./admin/upload/<?php echo $value['prd_image']; ?>" alt="" width="100px" height="100px" style="object-fit: cover;" alt=""> 
                            </div>
                        </li>
                        <li class="order-shipping-info-product-list">
                            <p class="order-shipping-info-product-name"><?php echo $value['prd_name']; ?></p>
                        </li>
                        <li class="order-shipping-info-product-list">
                            <p class="order-shipping-info-product-total">$30</p>
                        </li>
                        <li class="order-shipping-info-product-list">
                        <p class="order-shipping-info-product-total">1 Piece(s)</p>
                        </li>
                    </ul>
                    <?php  endforeach ?>
                </div>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div> 
    <script src="assets/js/emtycart.js"></script>
    <script src="assets/js/cart.js"></script>  
</body>
</html>