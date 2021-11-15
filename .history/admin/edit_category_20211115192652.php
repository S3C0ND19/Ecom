<?php
include('config/db.php');
$name = '';
$quantity = '';
$description = '';
$new_image='';
$status = '';
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM category WHERE cat_id = $id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['cat_name'];
    $quantity = $row['cat_quantity'];
    $description = $row['cat_description'];
    $old_image = $row['cat_image'];
    $status = $row['cat_status'];
  }
}
if (isset($_POST['btnEdit'])) {
  $id = $_GET['id'];
  $name = $_POST['sltCategory'];
  $quantity = $_POST['categogyQuantity'];
  $description = $_POST['categoryDescription'];
  $new_image = $_FILES['categoryImage']['name'];
  $status = $_POST['sltStatus'];
  if ($new_image != ''){
    $update_filename = $_FILES['categoryImage']['name'];
  }
  else{
    $update_filename = $old_image;
  }
  $query = "UPDATE category set cat_name='$name', cat_quantity='$quantity', cat_description='$description', cat_image='$update_filename', cat_status='$status' WHERE cat_id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Product Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: category.php');
}
?>
<?php include('includes/header.php'); ?>
  <div class="content">
      <?php include('includes/navbar.php'); ?>
      <div class="modal-main">
        <div class="content__header">
          <h3 class="content__title">Edit Category</h3>
            <div class="cotent__header-nav">
              <a href="index.php" class="content__header-nav-link">Dashboard / Category</a> 
            </div>
        </div>
        <div class="modal-body">
          <form action="edit_category.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-content-edit">                   
                  <div class="form-add-input">
                    <div class="form-add-heading">
                      <div class="form-add-description">
                        <span class="form-add-description-number">01</span>
                        <div class="form-add-description-details">
                          <p>Billing Info</p>
                          <span>Fill all infomation below</span> 
                        </div>
                      </div>
                      <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="form-add-content">
                      <div class="form-add-wrapper">
                        <div class="form-group form-add-select-child">
                          <label class="product__header">Category Name</label>
                          <select  name="sltCategory" class="form-select" >
                              <option value="<?php echo $name; ?>"selected><?php echo $name; ?></option>        
                              <option value="Armchairs">Armchairs</option>
                              <option value="Bath Room">Bath Room</option>
                              <option value="Dining Chairs">Dining Chairs</option>
                              <option value="Dining Tables" >Dining Tables</option>
                              <option value="Lighting">Lightings</option>
                              <option value="Living Room">Living Room</option>
                              <option value="Office">Office</option>
                              <option value="Seating" >Seating</option>
                              <option value="Sofas">Sofas</option>
                              <option value="Special">Special</option>
                              <option value="Table" >Table</option>
                          </select>
                        <div>
                        <div class="form-group form-add-select-child">
                          <label class="product__header">Category Status</label>
                          <select  name="sltStatus" class="form-select"> 
                              <option value="<?php echo $status;?>"selected>
                                  <?php 
                                    if($status == 1)
                                        echo "Hiện";
                                    else
                                         echo "Ẩn";
                                    ?>
                              </option>        
                              <option value="1">Hiện</option>
                              <option value="0">Ẩn</option>
                            </select>   
                        </div>
                      </div>                    
                      <div class="form-group form-add-input-child">
                            <label class="product__header">Quantity</label>
                            <input type="number" class="form-control product__input" name="categogyQuantity" required value="<?php echo $quantity; ?>"/>
                      </div>
                      <div class="form-group">
                          <label class="product__header">Category Description</label>
                          <textarea style="height:100px;" type="text" class="form-control product__input" name="categoryDescription" value="<?php echo $description; ?>"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-add-files">
                    <div class="form-add-heading">
                      <div class="form-add-description">
                        <span class="form-add-description-number">02</span>
                        <div class="form-add-description-details">
                          <p>Product Image</p>
                          <span>Fill all infomation below</span> 
                        </div>
                      </div>
                      <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="form-add-content">
                      <div class="form-group">
                        <label  class="product__header">Category Image </label>
                        <input multiple type="file" name="categoryImage" autocomplete="off"  class="product__input product__input-img" />
                      </div>
                    </div>   
                  </div>              
                  <div class="button-edit">                      
                        <button class="btn btn-danger edit" name="btnCancel">
                          <i class="fas fa-times"></i>
                          Cancel
                        </button>
                        <button type="submit"class="btn btn-success edit" name="btnEdit" >
                            <i class="far fa-save">
                              </i>
                            Save
                        </button>
                    </div>
            </div>      
          </form>
        </div>
      </div>
  </div>
<?php include('includes/footer.php'); ?>