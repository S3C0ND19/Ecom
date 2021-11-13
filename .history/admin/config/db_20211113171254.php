<?php
session_start();
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'ecom'
) or die(mysqli_error($mysqli));
session_destroy();
?>
