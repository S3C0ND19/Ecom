<?php

include('config/db.php');

if (isset($_POST['add_product'])) {
  $prd_name = $_POST['productName'];
  $prd_description = $_POST['"productDescription'];
  $prd_price = $_POST['productPrice'];
  $prd_image = $_POST['productImage'];
  $prd_quantity = $_POST['productQuantity'];
  $prd_date = $_POST['productDate'];
  $prd_sale = $_POST['productSale'];
  $prd_date = $_POST['productDate'];
  $query = "INSERT INTO product(prd_name, prd_price, prd_image, prd_description, prd_quantity, prd_date, prd_sale) VALUES ('$prd_name', $prd_price,'$prd_image', '$prd_description', $prd_quantity, $prd_date, $prd_sale)";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
