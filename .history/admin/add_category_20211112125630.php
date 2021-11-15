<?php

include('./config/db.php');

if (isset($_POST['btncreate'])) {
  $name = $_POST['sltCategory'];
  $quantity = $_POST['categogyQuantity'];
  $description = $_POST['categoryDescription'];
  $new_image = $_FILES['categoryImage']['name'];
  $status = $_POST['sltStatus'];
    $query = "INSERT INTO category (cat_name, cat_quantity, cat_description, cat_image, cat_status) VALUES ('$name', '$quantity','$description', '$new_image', $status)";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    $_SESSION['message'] = 'Update Category Success';
    $_SESSION['message_type'] = 'success';
    header('Location: category.php');
  }

?>
