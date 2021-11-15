<?php
include('config/db.php');
$name = '';
$new_image='';
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM brand WHERE brand_id = $id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['brand_name'];
    $old_image = $row['brand_img'];
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
  $_SESSION['message_type'] = 'warning';
  header('Location: brand.php');
}
if (isset($_POST['btnCancel'])){
  header('Location: brand.php');
}
?>
<?php include('includes/header.php'); ?>
  <div class="content">
      <?php include('includes/navbar.php'); ?>
    <div class="modal-main">
      <div class="modal-header">
        <h2 class="modal-title">Edit Product</h2>
      </div>
      <div class="modal-body">
        <form action="edit_brand.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label class="product__header">Brand Name</label>
                <select id="brand-select" style="width:20%;padding:10px 0;font-size:1.5rem;font-weight:500;" name="sltBrand">
                    <option value="<?php echo $name; ?>"selected><?php echo $name; ?></option>                  
                    <option value="Blast">Blast</option>
                    <option value="Minimal">Minimal</option>
                    <option value="Money">Money</option>
                    <option value="Best Sound" >Best Sound</option>
                    <option value="Redbox">RedBox</option>
                    <option value="Campfire">Camp Fire</option>
                </select>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
                <label class="product__header" for="product__input-img">Brand Image <small>(format: jpg, jpeg, png)</small></label>
                <input type="file" name="brandImage" class="product__input product__input-img">
            </div>  
          </div>
          <div class="col-12">
              <div class="button-edit">
                      <button class="btn btn-danger edit" name="btnCancel">
                        <i class="fas fa-times"></i>
                        Cancel</button>
                      <button class="btn btn-success edit" name="btnEdit">
                      <i class="far fa-save"></i>
                        Save</button>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  
<?php include('includes/footer.php'); ?>