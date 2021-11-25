<?php
include('./config/db.php');
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM purchase WHERE purchase_id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'User Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: order.php');
}
?>