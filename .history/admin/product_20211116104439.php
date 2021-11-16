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
                    <a href="index.php" class="content__header-nav-link">Dashboard / Product</a> 
                </div>
            </div>
            <div class="content__table">
                <div class="table-responsive">
                    <a href="add_product.php">
                        <button type="button" class="btnAdd"> + Add New Product</button>     
                    </a>   
                    <table class="table table-hover">                        
                        <thead>
                            <tr>
                                <th scope="row" style="font-size:1.5rem; padding-bottom:20px; font-weight:500;">Image</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Product Name</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Price Old</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Price</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Category</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Discount</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Date</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM product";
                                $result_tasks = mysqli_query($conn, $query);    
                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                            <tr style="border-bottom: 1px solid #dee2e6; ">
                                 <td>
                                    <img src="<?php echo "./upload/" .$row['prd_image'];?>" width="60px" height="60px" alt="">
                                    <img src="<?php echo "./upload/" .$row['prd_image_2'];?>" width="60px" height="60px" alt="">      
                                </td>
                                <td class="table-value" ><?php echo $row['prd_name']; ?></td>
                                <td ><?php echo $row['prd_price_old']; ?></td>
                                <td ><?php echo $row['prd_price']; ?></td>
                                <td ><?php echo $row['prd_category']; ?></td>
                                <td ><?php echo $row['prd_sale']; ?></td>
                                <td ><?php echo $row['prd_date']; ?></td>
                                <td>
                                    <a style="font-size:1.5rem; margin-right:20px;" href="edit_product.php?id=<?php echo $row['prd_id']?>" class="btn btn-sm ">
                                        <span class="iconify" data-icon="uil:pen"></span>
                                    </a>
                                    <a style="font-size:1.5rem" href="delete_product.php?id=<?php echo $row['prd_id']?>" class="btn btn-sm" onclick="return confirm('Are you sure you want to delete this product?');">
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