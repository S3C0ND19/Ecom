    <?php
    include('./config/db.php');
    if (isset($_POST['btncreate'])) {
        $firstname= $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $note = $_POST['note'];
        $total = $_POST['total'];
        $ord_prd_id= $_POST['ord_prd_id'];
        $user_id =  $_POST['user_id'];
        for($i = 0; $i<10; $i++) {
            $query2 = "INSERT INTO order_prd_id (user_id,product_id) VALUES ('$user_id','$ord_prd_id') WHERE user_id ='$user_id' ";
            $result2 = mysqli_query($conn, $query2);
        }
        $query = "INSERT INTO purchase (firstname,ord_prd_id,lastname,address,city,postcode,email,phone,total,note) VALUES ('$firstname','1','$lastname','$address','$city','$postcode','$email','$phone','$total','$note')";
        $result = mysqli_query($conn, $query);
        if(!$result && !$result2) {
            die("Query Failed.");
        }else {
            header('Location: success.php');
        }
    }
    if (isset($_POST['btncreate'])) {
     
    }
    ?>