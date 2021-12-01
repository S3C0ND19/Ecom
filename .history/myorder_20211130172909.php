<?php
include('./config/db.php'); 
$id = $_SESSION["login"][0];
$order  = mysqli_query($conn,"SELECT * FROM purchase  WHERE purchase_user_id =$id");
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="myorder-container">
                <p class="myorder-heading">My Orders</p>
                <table class="table-order"> 
                    <tr>
                        <th class="table-order-id">Order ID</th>
                        <th class="table-order-items">Num of Items</th>
                        <th class="table-order-amount">Amount</th>
                        <th class="table-order-status">Status</th>
                        <th class="table-order-action">Actions</th>
                    </tr>
                    <?php foreach ($order as $key => $value): ?>    
                    <tr class="tr-content">
                        <td class="table-order-id" ><?php echo $value['purchase_id']; ?></td>
                        <td class="table-order-items"><?php echo $value['quantity']; ?></td>
                        <td class="table-order-amount">$<?php echo $value['total']; ?></td>
                        <td class="table-order-status process">Processing</td>
                        <td class="table-order-action">
                            <a href="myorder_details.php?id=<?php echo $value['purchase_id']?>">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <?php  endforeach ?>
                    <tr>
                        <th class="table-order-id">Order ID</th>
                        <th class="table-order-items">Num of Items</th>
                        <th class="table-order-amount">Amount</th>
                        <th class="table-order-status">Status</th>
                        <th class="table-order-action">Actions</th>
                    </tr>
                </table>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div> 
    <script src="assets/js/emtycart.js"></script>
    <script src="assets/js/cart.js"></script>  
</body>
</html>