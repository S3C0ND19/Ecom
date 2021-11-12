<?php

include('./config/db.php');

if (isset($_POST['btncreate'])) {
  $name = $_POST['productName'];
  $brand = $_POST['sltBrand'];
  $category = $_POST['sltCategory'];
  $description = $_POST['productDescription'];
  $price = $_POST['productPrice'];
  $new_image = $_FILES['productImage']['name'];
  $quantity = $_POST['productQuantity'];
  $date = $_POST['productDate'];
  $sale = $_POST['productSale'];
    $query = "INSERT INTO product (prd_name, prd_category, prd_price, prd_image, prd_description, prd_quantity, prd_brand, prd_date, prd_sale) VALUES ('$name','$category' ,'$price','$new_image', '$description', '$quantity','$brand', '$date', '$sale')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    $_SESSION['message'] = 'Update Product Success';
    $_SESSION['message_type'] = 'success';
    header('Location: product.php');
  }

?>
