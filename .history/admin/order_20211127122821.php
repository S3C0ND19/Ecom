<?php include('config/db.php'); 
include('config/db.php');
$status = '';
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM purchase WHERE purchase_id = $id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $status = $row['status'];
  }
}
if (isset($_POST['btnEdit'])) {
  $id = $_GET['id'];
  $name = $_POST['sltBrand'];
  $new_image = $_FILES['brandImage']['name'];
  if ($new_image != ''){
    $update_filename = $_FILES['brandImage']['name'];
  }
  else{
    $update_filename = $old_image;
  }
  $query = "UPDATE brand set brand_name='$name', brand_img='$update_filename' WHERE brand_id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Brand Updated Successfully';
  $_SESSION['message_type'] = 'info';
  header('Location: brand.php');
}
?>
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
                                <th scope="row" class="table-header-value">User ID</th>
                                <th scope="row" class="table-header-value">Items</th>
                                <th scope="row" class="table-header-value">Status</th>
                                <th scope="row" class="table-header-value">Date</th>
                                <th scope="row" class="table-header-value">Total</th>
                                <th scope="row" class="table-header-value">Details</th>
                                <th scope="row" class="table-header-value">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT  * FROM  purchase";
                                $result_tasks = mysqli_query($conn, $query);    
                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                    <tr>
                                        <td class="table-value" ><?php echo $row['purchase_id']; ?></td>
                                        <td class="table-value" ><?php echo $row['purchase_user_id']; ?></td>
                                        <td class="table-value" ><?php echo $row['quantity']; ?></td>
                                        <td class="table-value" >
                                            <span class="textfill"> 
                                                <?php 
                                                    if($row['status']== 0)
                                                        echo "Chưa Giao";
                                                    else
                                                        echo "Đã Giao";
                                                ?>
                                            </span>                               
                                        </td>
                                        <td class="table-value" ><?php echo $row['date']; ?></td>
                                        <td class="table-value" ><?php echo $row['total']; ?>.00$ </td>
                                        <td>
                                            <a style="font-size:1.5rem; margin-right:20px;" href="details.php?id=<?php echo $row['purchase_id']?>" class="btn btn-sm ">
                                                <span class="iconify" data-icon="akar-icons:eye"></span>
                                            </a>
                                        </td> 
                                        <td>
                                            <a style="font-size:1.5rem; margin-right:20px;" href="edit_order.php?id=<?php echo $row['purchase_id']?>" class="btn btn-sm ">
                                                <span class="iconify" data-icon="uil:pen"></span>
                                            </a>
                                            <a style="font-size:1.5rem" href="delete_order.php?id=<?php echo $row['purchase_id']?>" class="btn btn-sm" onclick="return confirm('Are you sure you want to delete this product?');">
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