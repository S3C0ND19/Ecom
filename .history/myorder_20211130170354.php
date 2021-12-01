<?php
include('./config/db.php');
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
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td class="table-order-id" >1</td>
                        <td class="table-order-id">2</td>
                        <td>$675.12</td>
                        <td>Processing</td>
                        <td>
                            <div>
                            <i class="fas fa-eye"></i>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div> 
    <script src="assets/js/emtycart.js"></script>
    <script src="assets/js/cart.js"></script>  
</body>
</html>