<?php
include('./config/db.php');
$old_password = '';
$new_password = '';
if(isset($_GET['id'])) { 
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE user_id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $old =$row['user_password'];
        echo $old ;
    }
}
if (isset($_POST['btnEdit'])) {
    $id = $_GET['id'];
    $old_password= md5($_POST['oldpass']);
    echo $old_password ; 
    $new_password = $_POST['newpass'];
    if ($old !=  $old_password){
        echo "sai pass";
    }else {
        $update_password =  md5($_POST['newpass']);
    }
    echo $update_password ;
    $query = "UPDATE user set user_password='$update_password' WHERE user_id=$id";
    $result= mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed.");
    }
    else {
        header('Location: profile.php');
    }
}
?>

<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
        <div class="update-profile-container">
                <div class="update-profile-wrapper">
                    <div class="update-profile-modal">
                        <p class="update-profile-tittle">Update Password</p>
                    </div>
                    <form action="update.php?id=<?php echo $_SESSION["login"][0]?>" method="POST" enctype="multipart/form-data">
                        <div class="update-profile-form">
                            <div class="update-profile-form-group">
                                <label class="update-profile-form-header">Old Password</label>
                                <input type="password" class="update-profile-form-input" name="oldpass">
                            </div>
                            <div class="update-profile-form-group">
                                <label class="update-profile-form-header">New Password</label>
                                <input type="password" class="update-profile-form-input" name="newpass">
                            </div>
                            <div class="update-profile-form-group">
                                <button name="btnEdit" class="upadate-btn">Update Password</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        <?php include('includes/footer.php'); ?> 
    </div>
</body>
</html>