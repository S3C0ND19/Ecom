<?php
include("db.php");
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT prd_image FROM prd_details WHERE id = $id";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  mysqli_close($conn);
  
  header("Content-type: image/jpeg");
  echo $row['prd_image'];
}
?>