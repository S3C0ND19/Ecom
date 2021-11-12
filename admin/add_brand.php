<?php

include('./config/db.php');

if (isset($_POST['btncreate'])) {
  $name = $_POST['sltBrand'];
  $new_image = $_FILES['brandImage']['name'];
    $query = "INSERT INTO brand (brand_name,brand_img) VALUES ('$name','$new_image')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    $_SESSION['message'] = 'Update Product Success';
    $_SESSION['message_type'] = 'success';
    header('Location: brand.php');
  }

?>
