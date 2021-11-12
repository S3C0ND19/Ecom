

<?php
  include('./config/db.php');
	$id = $_GET["key"];
	$sql = "delete from product where prd_id = $id";
	$result = mysqli_query($conn, $query);
	if(!$result)
	{
    die("Query Failed.") . mysqli_error($conn);;
	}
  $_SESSION['message'] = 'Product Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: product.php');
?>
