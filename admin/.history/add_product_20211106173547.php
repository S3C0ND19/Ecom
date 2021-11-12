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
  if($result)
  {
      mysqli_close($conn);
      header("location: product.php");
  }
  else
      echo "Thêm dữ liệu thất lại " . mysqli_error($conn);
}

?>
