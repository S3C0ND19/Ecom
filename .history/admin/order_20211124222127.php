<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="content">
        <?php include('includes/navbar.php'); ?>
        <div class="content-main">
            <?php if (isset($_SESSION['message'])) { ?>
                <div style="font-size:1.5rem; font-weight: 500;" class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                    <button type="button" class="close btn-close" onclick="deleteAlert()"  aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>
            <div class="content__header">
                <h3 class="content__title">Product</h3>
                <div class="cotent__header-nav">
                    <a href="index.php" class="content__header-nav-link">Dashboard / Order</a> 
                </div>
            </div>
            <div class="content__table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row" class="table-header-value">Order Image</th>
                                <th scope="row" class="table-header-value">First Name</th>
                                <th scope="row" class="table-header-value">Last Name</th>
                                <th scope="row" class="table-header-value">Email</th>
                                <th scope="row" class="table-header-value">Address</th>
                                <th scope="row" class="table-header-value">City</th>
                                <th scope="row" class="table-header-value">Total</th>
                                <th scope="row" class="table-header-value">Date</th>
                                <th scope="row" class="table-header-value">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM purchase inner join user on  purchase.purchase_user_id  = user.user_id 
                                inner join order_prd_id on  user.user_id = order_prd_id.user_id";
                                $result_tasks = mysqli_query($conn, $query);    
                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                    <tr>
                                       <td><?php echo $row['product_id ']; ?></td>
                                    </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>