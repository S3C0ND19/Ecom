<?php
session_start();
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'ecom'
) or die(mysqli_error($mysqli));

$connect = new PDO("mysql:host=localhost;dbname=ecom", "root", "");
?>
