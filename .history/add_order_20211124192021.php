    <?php
    include('./config/db.php');
    if (isset($_POST['btncreate'])) {
        $firstname= $_POST['firstname'];
        $purchase_user_id =$_POST['user_id']; 
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $note = $_POST['note'];
        $total = $_POST['total'];
        $user_id =  $_POST['user_id'];
        $query = "INSERT INTO purchase (firstname,purchase_user_id,lastname,address,city,postcode,email,phone,total,note) VALUES ('$firstname','$purchase_user_id','$lastname','$address','$city','$postcode','$email','$phone','$total','$note')";
        $result = mysqli_query($conn, $query);
        if(!empty($_SESSION["shopping_cart"])){
            foreach($_SESSION["shopping_cart"] as $keys => $values){
                $resultid=$values["item_id"];
                $query2 = "INSERT INTO order_prd_id (user_id,product_id) VALUES ('$user_id','$resultid')";
                $result2 = mysqli_query($conn, $query2);
        }
        }   
        if(!$result && !$result2) {
            die("Query Failed.");
        }else {
            header('Location: success.php');
        }
    }
    if (isset($_POST['btncreate'])) {
     
    }
    ?>