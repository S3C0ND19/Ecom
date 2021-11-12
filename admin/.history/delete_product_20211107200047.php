<?php

include('./config/db.php');

if(isset($_GET['prd_id'])) {
  $id = $_GET['prd_id'];
  $query = "DELETE FROM product WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'Product Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: product.php');
}
?>
