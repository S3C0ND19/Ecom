<?php

include('./config/db.php');

if (isset($_POST['btncreate'])) {
  $name = $_POST['productName'];
  $description = $_POST['"productDescription'];
  $price = $_POST['productPrice'];
  $image= $_FILES['productImage']['name'];
  $image_temp=$_FILES['productImage']['tmp_name'];
  $quantity = $_POST['productQuantity'];
  $date = $_POST['productDate'];
  $sale = $_POST['productSale'];
  $query = "INSERT INTO prd_details (prd_name, prd_price, prd_image, prd_description, prd_quantity, prd_date, prd_sale) VALUES ('$name', '$price','$image', '$description', '$quantity', '$date', '$sale')";
  $result = mysqli_query($conn, $query);
  // if(!$result) {
  //  
  // }
  if($result){
    move_uploaded_file($_FILES["productImage"]["tmp_name"], "upload/".$_FILES["productImage"]["name"]);
    $_SESSION['message'] = 'Update Product Success';
    $_SESSION['message_type'] = 'success';
    header('Location: product.php');
  }
  else {
    die("Query Failed.");
    $_SESSION['message'] = 'Update Product Not Success';
    header('Location: product.php');
  }

 
}
?>
