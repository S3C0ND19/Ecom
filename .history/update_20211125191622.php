<?php
include('./config/db.php');
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="update-profile-container">
                <div class="update-profile-modal">
                    <p class="update-profile-tittle">Update Profile</p>
                </div>
                <div class="update-profile-form">
                    <div class="update-profile-form-group">
                        <label class="update-profile-form-header">Name</label>
                        <input type="text" class="update-profile-form-input" name="name" required/>
                    </div>
                    <div class="update-profile-form-group">
                        <label class="update-profile-form-header">Email</label>
                        <input type="email" class="update-profile-form-input" name="email" required/>
                    </div>
                    <div class="update-profile-form-group">
                        <label class="update-profile-form-header">Image</label>
                        <input type="file" class="update-profile-form-input img" name="image"/>
                    </div>
                </div>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div>
</body>
</html>