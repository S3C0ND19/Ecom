<?php
include('config/db.php');
$status = '';
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM brand WHERE brand_id = $id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['brand_name'];
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
    <div class="modal-main">
      <div class="modal-header">
        <h2 class="modal-title">Update Order</h2>
      </div>
      <div class="modal-body">
        <form action="edit_order.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="product__header">Order Status</label>
                    <select class="form-select" name="sltStatus">
                        <option value="" selected>--Please choose an option--</option>
                        <option value="0">Chưa Giao</option>
                        <option value="1">Đã Giao</option>
                    </select>
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
        </form>
      </div>
    </div>
  </div>
  
<?php include('includes/footer.php'); ?>