<?php

include('./config/db.php');

if (isset($_POST['btncreate'])) {
  $name = $_POST['productName'];
  $description = $_POST['"productDescription'];
  $price = $_POST['productPrice'];
  $image = $_POST['productImage'];
  $quantity = $_POST['productQuantity'];
  $date = $_POST['productDate'];
  $sale = $_POST['productSale'];
  $query = "INSERT INTO prd_details (prd_name, prd_price, prd_image, prd_description, prd_quantity, prd_date, prd_sale) VALUES ('$name', '$price','$image', '$description', '$quantity', '$date', '$sale')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Update Product Success';
  $_SESSION['message_type'] = 'Success';
  header('Location: product.php');
}
?>
