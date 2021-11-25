<?php
include('./config/db.php');
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="profile-container">
                <p class="profile-heading">My Profile</p>
                <div class="grid">
                    <div class="row">
                        <div class="col l-6">
                            <div class="edit-profile">
                                <div class="profile-img">
                                    <img src="./assets/img/user-avt-deafault2.png" alt="">
                                </div>
                                <a href="" class="profile-link edit">Edit Profile</a>
                            </div>
                        </div>
                        <div class="col l-6">
                            <div class="profile-infomarion">
                                <ul class="profile-infomarion-item">
                                    <li class="profile-infomarion-list">
                                        <span class="profile-infomarion-heading">Full Name</span>
                                        <span class="profile-infomarion-content">Lisa</span>
                                    </li>
                                    <li class="profile-infomarion-list">
                                        <span class="profile-infomarion-heading">User Name</span>
                                        <span class="profile-infomarion-content"><?php echo $_SESSION["login"][5];?></span>
                                    </li>
                                    <li class="profile-infomarion-list">
                                        <span class="profile-infomarion-heading">Email Address</span>
                                        <span class="profile-infomarion-content"><?php echo $_SESSION["login"][4];?></span>
                                    </li>                                
                                </ul>
                                <a href="" class="profile-link order">My Orders</a>
                                <a href="" class="profile-link password">Change Password</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div>       
</body>
</html>