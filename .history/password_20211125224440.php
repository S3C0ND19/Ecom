<?php
include('./config/db.php');
$old_password = '';
$new_password = '';
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