<?php
include('./config/db.php');
$name = '';
$email = '';
$new_image='';
if  (isset($_GET['id'])) { 
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE user_id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $name = $row['user_name'];
        $email = $row['user_email'];
        $old_image = $row['brand_img'];
    }
}
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="update-profile-container">
                <div class="update-profile-wrapper">
                <div class="update-profile-modal">
                    <p class="update-profile-tittle">Update Profile</p>
                </div>
                <form action="update.php?id=<?php echo $_SESSION["login"][0]?>" method="POST" enctype="multipart/form-data">
                    <div class="update-profile-form">
                        <div class="update-profile-form-group">
                            <label class="update-profile-form-header">Name</label>
                            <input type="text" class="update-profile-form-input" name="name" value="<?php echo $_SESSION["login"][3];?>"/>
                        </div>
                        <div class="update-profile-form-group">
                            <label class="update-profile-form-header">Email</label>
                            <input type="email" class="update-profile-form-input" name="email" value="<?php echo $_SESSION["login"][4];?>"/>
                        </div>
                        <div class="update-profile-form-group">
                            <label class="update-profile-form-header">Avatar</label>
                            <div class="update-profile-form-group-img">
                                <img src="./assets/img/user-avt-deafault2.png" alt="" class="update-profile-img-old">
                                <input type="text"  class="update-profile-form-input avatar" value="Choose Avatar" disabled>
                                <input type="file" class="update-profile-form-img" style="width:100px;" name="image"/>
                            </div>
                        </div>
                        <div class="update-profile-form-group">
                          <button type="submit" class="upadate-btn">Update</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div>
</body>
</html>