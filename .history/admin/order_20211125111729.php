<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="content">
        <?php include('includes/navbar.php'); ?>
        <div class="content-main">
            <?php if (isset($_SESSION['message'])) { ?>
                <button class=" alert-toast-message alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                    <i  onclick="deleteAlert()"  class=" alert-toast-message-icon ti-close"></i>
                </button>
            <?php session_unset(); } ?>
            <div class="content__header">
                <button class="alert-toast-message" >Removed product successfully</button>
                <h3 class="content__title">Order</h3>
                <div class="cotent__header-nav">
                    <a href="index.php" class="content__header-nav-link">Dashboard / Order</a> 
                </div>
            </div>
            <div class="content__table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row" class="table-header-value">User ID</th>
                                <th scope="row" class="table-header-value">Product ID</th>
                                <th scope="row" class="table-header-value">First Name</th>
                                <th scope="row" class="table-header-value">Last Name</th>
                                <th scope="row" class="table-header-value">Email</th>
                                <th scope="row" class="table-header-value">Address</th>
                                <th scope="row" class="table-header-value">City</th>
                                <th scope="row" class="table-header-value">Date</th>
                                <th scope="row" class="table-header-value">Price</th>
                                <th scope="row" class="table-header-value">Status</th>
                                <th scope="row" class="table-header-value">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM purchase inner join user on  purchase.purchase_user_id  = user.user_id 
                                inner join order_prd_id on  user.user_id = order_prd_id.user_id
                                inner join product on  order_prd_id.product_id= product.prd_id ";
                                $result_tasks = mysqli_query($conn, $query);    
                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                    <tr>
                                        <td class="table-value" ><?php echo $row['user_id']; ?></td>
                                        <td class="table-value" ><?php echo $row['product_id']; ?></td>
                                        <td class="table-value" ><?php echo $row['firstname']; ?></td>
                                        <td class="table-value" ><?php echo $row['lastname']; ?></td>
                                        <td class="table-value" ><?php echo $row['email']; ?></td>
                                        <td class="table-value" ><?php echo $row['address']; ?></td>
                                        <td class="table-value" ><?php echo $row['city']; ?></td>
                                        <td class="table-value" ><?php echo $row['date']; ?></td>
                                        <td class="table-value" >$<?php echo $row['prd_price']; ?></td>   
                                        <td class="table-value" >
                                            <span class="textfill"> 
                                            <?php 
                                                if($row["order_status"] == 1)
                                                    echo "Đã Giao";
                                                else
                                                    echo "Chưa Giao";
                                            ?>
                                     </span>  
                                        </td> 
                                        <td>
                                        <a style="font-size:1.5rem" href="delete_order.php?id=<?php echo $row['order_id']?>" class="btn btn-sm" onclick="return confirm('Are you sure you want to delete this product?');">
                                            <span class="iconify trash" data-icon="uil:trash-alt"></span>
                                        </a>
                                        </td>                                   
                                    </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>