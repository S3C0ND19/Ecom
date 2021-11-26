<?php include('config/db.php');
if(isset($_GET['id'])) { 
    $id = $_GET['id'];
    $query = "SELECT * FROM purchase WHERE purchase_id = $id" ;
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $purchase_id = $row['purchase_id'];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $address = $row['address'];
        $city =$row['city'];
        $phone = $row['phone'];
        $email = $row['email'];
        $total = $row['total'];
    }
}
$info = mysqli_query($conn,
    "SELECT  * FROM purchase 
    inner join user on  purchase.purchase_user_id  = user.user_id
    inner join order_prd_id on user.user_id = order_prd_id.user_id 
    inner join product on order_prd_id.product_id = product.prd_id 
    WHERE purchase_id = $id");
?>
<?php include('includes/header.php'); ?>    
    <div class="content">
        <?php include('includes/navbar.php'); ?>
        <div class="content-main">
            <div class="content__header">
                <h3 class="content__title">Order Details</h3>
                <div class="cotent__header-nav">
                    <a href="index.php" class="content__header-nav-link">Dashboard / Order</a> 
                </div>
            </div>
            <div class="content-table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row" class="table-header-value">Order ID</th>
                                <th scope="row" class="table-header-value">Product Image</th>
                                <th scope="row" class="table-header-value">FirstName</th>
                                <th scope="row" class="table-header-value">LastName</th>
                                <th scope="row" class="table-header-value">Address</th>
                                <th scope="row" class="table-header-value">City</th>
                                <th scope="row" class="table-header-value">Email</th>
                                <th scope="row" class="table-header-value">Phone</th>
                                <th scope="row" class="table-header-value">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>                                   
                                    <td class="table-value"><?php echo $purchase_id ?></td>
                                    <?php foreach ($info as $key => $value):?>
                                    <td>
                                        
                                            <img src="./upload/<?php echo $value['prd_image']; ?>" width="100px" height="100px" alt="">      
                                       
                                    </td>
                                    <?php  endforeach ?>
                                    <td class="table-value"><?php echo $fname ?></td>
                                    <td class="table-value"><?php echo $lname ?></td>
                                    <td class="table-value"><?php echo $address ?></td>
                                    <td class="table-value"><?php echo $city ?></td>
                                    <td class="table-value"><?php echo $email ?></td>
                                    <td class="table-value"><?php echo $phone ?></td>
                                    <td class="table-value"><?php echo $total ?>.00$</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>