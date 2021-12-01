<?php
include('./config/db.php');
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="myorder-container">
                <p class="myorder-heading">My Orders</p>
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Num of Items</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
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