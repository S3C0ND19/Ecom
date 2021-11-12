<?php

include('./config/db.php');

if (isset($_POST['btncreate'])) {
  $name = $_POST['productName'];
  $description = $_POST['"productDescription'];
  $price = $_POST['productPrice'];

  $new_image = $_FILES['productImage']['name'];
  $old_image = $_FILES['productImage_old"'];

  $quantity = $_POST['productQuantity'];
  $date = $_POST['productDate'];
  $sale = $_POST['productSale'];
  if($new_image !=''){
    $update_filename = $_FILES['productImage']['name'];
  }
  else { 
    $update_filename = $old_image;
  }
  if (file_exists("./upload/" . $_FILES['productImage']['name'])){
    $filename  = $_FILES['productImage']['name'];
    $_SESSION['message'] = 'Update IMG Exists' .$filename;
    header('Location: product.php');
  }
  else {
    $query = "INSERT INTO prd_details (prd_name, prd_price, prd_image, prd_description, prd_quantity, prd_date, prd_sale) VALUES ('$name', '$price','$image', '$description', '$quantity', '$date', '$sale')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    $_SESSION['message'] = 'Update Product Success';
    $_SESSION['message_type'] = 'success';
    header('Location: product.php');
  }
}
?>
