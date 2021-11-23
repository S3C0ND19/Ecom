    <?php
    include('./config/db.php');
        if (isset($_POST['btncreate'])) {
                $firstname= $_POST['firstname'];
                $ord_prd_id= $_POST['ord_prd_id'];
                $lastname = $_POST['lastname'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $postcode = $_POST['postcode'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $note = $_POST['note'];
                $total = $_POST['total'];
                $query = "INSERT INTO purchase (firstname,ord_prd_id,lastname,address,city,postcode,email,phone,total,note) VALUES ('$firstname','$ord_prd_id','$lastname','$address','$city','$postcode','$email','$phone','$total','$note')";
                $result = mysqli_query($conn, $query);
                if(!$result) {
                    die("Query Failed.");
                }else {
                    header('Location: success.php');
                }
        
}
    ?>