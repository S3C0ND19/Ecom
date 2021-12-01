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
                <div class="myorder-empty">
                    <img src="./assets/img/no-orders_2x.jpg" alt="" width="200px" height="200px" style="object-fit:cover;">
                    <p class="myorder-empty-content">No Order</p>
                </div>
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
                        <td class="table-order-status content process">
                                    <?php 
                                            if($value['total']== 1)
                                                echo "Done";
                                            else
                                                echo "Processing";
                                        ?>
                        </td>
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
    <script>
        const tableRow = document.querySelector('.tr-content')
        const orderEmty = document.querySelector('.myorder-empty')
        const table = document.querySelector('.table-order')
        const  contentStatus = document.querySelector('.table-order-status.content') 
        if (tableRow  == null) {
            table.style.display="none"
            orderEmty.style.display="block"
        }
        


    </script>  
</body>
</html>