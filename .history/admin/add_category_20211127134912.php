<?php

include('./config/db.php');

if (isset($_POST['btncreate'])) {
  $name = $_POST['sltCategory'];
  $description = $_POST['categoryDescription'];
  $new_image = $_FILES['categoryImage']['name'];
  $status = $_POST['sltStatus'];
  // $count_product = mysqli_query($conn,"SELECT * FROM product  WHERE cat_status='1' ORDER BY cat_id");
    $query = "INSERT INTO category (cat_status, cat_name, cat_description, cat_image) VALUES ('$status','$name','$description', '$new_image' )";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    $_SESSION['message'] = 'Update Category Success';
    $_SESSION['message_type'] = 'success';
    header('Location: category.php');
  }

?>
