<?php

include('./config/db.php');
if (isset($_POST['btncreate'])) {
    $firtname = $_POST['firtname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $note = $_POST['note'];
    $total = $_POST['total'];
    $query = "INSERT INTO purchase (firstname,lastname,address,city,postcode,email,phone,note,total) VALUES ('$firstnam','$lastname','$address','$city','$postcode','$email','$phone','$note','$total')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed.");
    }
    header('Location: checkout.php');
}
?>