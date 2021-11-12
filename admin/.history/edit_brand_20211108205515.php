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
    $name = $row['prd_name'];
    $description = $row['prd_description'];
    $price = $row['prd_price'];
    $old_image = $row['prd_image'];
    $quantity = $row['prd_quantity'];
    $date = $row['prd_date'];
    $sale = $row['prd_sale'];
  }
}
if (isset($_POST['btnEdit'])) {
  $id = $_GET['id'];
  $name = $_POST['productName'];
  $brand = $_POST['sltBrand'];
  $category = $_POST['sltCategory'];
  $description = $_POST['productDescription'];
  $price = $_POST['productPrice'];
  $new_image = $_FILES['productImage']['name'];
  $quantity = $_POST['productQuantity'];
  $date = $_POST['productDate'];
  $sale = $_POST['productSale'];
  if ($new_image != ''){
    $update_filename = $_FILES['productImage']['name'];
  }
  else{
    $update_filename = $old_image;
  }
  $query = "UPDATE product set prd_name='$name', prd_category='$category',prd_price='$price', prd_image='$update_filename', prd_description	='$description', 
  prd_quantity='$quantity',prd_brand='$brand',prd_date='$date' ,prd_sale='$sale' WHERE prd_id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Product Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: product.php');
}
?>