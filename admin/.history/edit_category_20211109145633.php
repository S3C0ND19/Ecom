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
<div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Edit Category</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edit_category.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="product__header">Category Name</label>
                        <select id="category-select" name="sltCategory" style="width:100%; padding:7px; font-size:1.7rem"> 
                            <option value="armchairs" selected>Armchairs</option>
                            <option value="bath_room">Bath Room</option>
                            <option value="dining_chairs">Dining Chairs</option>
                            <option value="dining_tables" >Dining Tables</option>
                            <option value="lighting">Lightings</option>
                            <option value="living_room">Living Room</option>
                            <option value="office">Office</option>
                            <option value="seating" >Seating</option>
                            <option value="sofas">Sofas</option>
                            <option value="special">Special</option>
                            <option value="table" >Table</option>
                        </select>
                <div>
            </div>
            <div class="col-12">
                <div class="form-group" style="margin:10px 0;">
                    <label class="product__header" for="product__quantity-input">Category Quantity</label>
                    <input type="numbber" class="product__input" name="categogyQuantity" required placeholder="Enter Category Quantity" id="product__quantity-input" value="<?php echo $quantity; ?>">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group " style="margin:10px 0;">
                    <label class="product__header" for="product__description-input">Category Description</label>
                    <input type="text" class="product__input" name="categoryDescription" required placeholder="Enter Category Description" id="product__description-input" value="<?php echo $description; ?>">
                </div>   
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="product__header" for="product__input-img">Category Image <small>(format: jpg, jpeg, png)</small></label>
                    <input type="file" name="categoryImage" class="product__input product__input-img">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group" style="margin:10px 0;">
                    <label class="product__header">Category Status</label>
                        <select id="category__status-select" name="sltStatus" style="width:100%; padding:7px; font-size:1.7rem"> 
                            <option value="1" selected>Hiện</option>
                            <option value="0">Ẩn</option>
                        </select>                               
                </div> 
            </div>
            <div class="col-12">
                <div class="button-edit">
                    <button class="btn-success btn-create" name="btnEdit">UPDATE CATEGORY</button>
                </div>
            </div>
          </div>         
        </form>
      </div>
</div>
<?php include('includes/footer.php'); ?>