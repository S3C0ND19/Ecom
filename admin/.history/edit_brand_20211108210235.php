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
    $old_image = $row['brand_image'];
  }
}
if (isset($_POST['btnEdit'])) {
  $id = $_GET['id'];
  $name = $_POST['brand_name'];
  $new_image = $_FILES['productImage']['name'];

  if ($new_image != ''){
    $update_filename = $_FILES['productImage']['name'];
  }
  else{
    $update_filename = $old_image;
  }
  $query = "UPDATE product set prd_name='$name', prd_category='$category',prd_price='$price', prd_image='$update_filename', prd_description	='$description', 
  prd_quantity='$quantity',prd_brand='$brand',prd_date='$date' ,prd_sale='$sale' WHERE prd_id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Brand Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: brand.php');
}
?>
<?php include('includes/header.php'); ?>
  <div class="modal-header">
        <h2 class="modal-title">Edit Product</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
  </div>
  <div class="modal-body">
      <form action="edit_brand.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
      <div class="row">
          
      </div>
  </div>
<?php include('includes/footer.php'); ?>