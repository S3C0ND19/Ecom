    <?php
    include('./config/db.php');
    if (isset($_POST['btncreate'])) {
        $purchase_user_id =$_POST['pur_user_id']; 
        $firstname= $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $quantity = $_POST['quantity'];
        $total = $_POST['total'];
        $note = $_POST['note'];
        $date = date('j M, Y');
        $status = 0;
        $user_id =  $_POST['user_id'];
        $query = "INSERT INTO purchase (purchase_user_id,firstname,lastname,address,city,postcode,email,phone,quantity,total,note,date) 
        VALUES ('$purchase_user_id','$firstname','$lastname','$address','$city','$postcode','$email','$phone','$quantity',$total','$note','$date')";
        $result = mysqli_query($conn, $query);
        if(!empty($_SESSION["shopping_cart"])){
            foreach($_SESSION["shopping_cart"] as $keys => $values){
                $resultid=$values["item_id"];
                $query2 = "INSERT INTO order_prd_id (user_id,product_id,order_status) VALUES ('$user_id','$resultid','$status')";
                $result2 = mysqli_query($conn, $query2);
            }
        } 
        if(!$result && !$result2) {
            die("Query Failed.");
        }else {
            header('Location: success.php');
        } 
     
    }

    ?>