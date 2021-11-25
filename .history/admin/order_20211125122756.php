<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="content">
        <?php include('includes/navbar.php'); ?>
        <div class="content-main">
            <?php if (isset($_SESSION['message'])) { ?>
               <div class="toast-mess-container">
                <button class=" alert-toast-message alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                        <i  onclick="deleteAlert()"  class=" alert-toast-message-icon ti-close"></i>
                    </button>
               </div>
            <?php session_unset(); } ?>
            <div class="content__header">
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
                                <th scope="row" class="table-header-value">Order ID</th>
                                <th scope="row" class="table-header-value">Items</th>
                                <th scope="row" class="table-header-value">User ID</th>
                                <th scope="row" class="table-header-value">Amount</th>
                                <th scope="row" class="table-header-value">Date</th>
                                <th scope="row" class="table-header-value">Status</th>
                                <th scope="row" class="table-header-value">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM order_prd_id 
                                  inner join user on  order_prd_id.user_id = user.user_id
                                  inner join purchase on  user.user_id = purchase.purchase_user_id";
                                $result_tasks = mysqli_query($conn, $query);    
                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                    <tr>
                                        <td class="table-value" ><?php echo $row['purchase_id']; ?></td>
                                        <td class="table-value" >
                                        <?php 
                                            $getvalue =  $row['user_id'];                                            
                                            $result=mysqli_query($conn,"SELECT count(product_id) as total from order_prd_id
                                                WHERE user_id =$getvalue  ORDER BY product_id  DESC LIMIT 1;
                                            ");
                                            $data=mysqli_fetch_assoc($result);
                                            echo $data['total']                          
                                            ?>  
                                        </td>
                                       
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