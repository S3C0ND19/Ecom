<?php
include('./config/db.php');
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM brand WHERE brand_id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'Brand Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: brand.php');
}
?>