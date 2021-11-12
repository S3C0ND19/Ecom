<?php
include('./config/db.php');
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM category WHERE cat_id= $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = ' Category Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: category.php');
}
?>