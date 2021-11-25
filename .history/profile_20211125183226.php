<?php
include('./config/db.php');
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="profile-container">
                <h3 class="profile-heading">My Profile</h3>
                <div class="grid">
                    <div class="row">
                        <div class="col l-6">
                            <div class="profile-img">
                                <img src="./assets/img/user-avt-deafault2.png" alt="">
                                <a href="" class="profile-link edit">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div>       
</body>
</html>