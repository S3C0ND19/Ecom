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
    $name = $_POST['note'];
    $total = $_POST['total'];
}
?>