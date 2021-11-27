<?php
include('./config/db.php');
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="profile-container">
                <?php 
                    if (!empty($_SESSION['successfully'])) {
                        echo"
                        <div class=alert>
                            <p class='toast success'>Cập nhật profile thành công
                                <button type='button' class='icon-success btn-alert-close' onclick='deleteAlert()'>
                                    <i class='fas fa-times'></i>
                                </button>
                            </p>  
                        </div>
                        ";
                        unset($_SESSION['successfully']);} 
                    elseif(!empty($_SESSION['wrong'])){
                        echo"
                        <div class=alert>
                            <p class='toast wrong'>Bạn vừa nhập sai password cũ!
                                <button type='button' class='icon-wrong btn-alert-close' onclick='deleteAlert()'>
                                    <i class='fas fa-times'></i>
                                </button>
                            </p>  
                        </div>";
                        unset($_SESSION['wrong']);
                    } 
                    ?>
                <p class="profile-heading">My Profile</p>
                <div class="grid">
                    <div class="row">
                        <?php   
                                $id = $_SESSION["login"][0];
                                $query = "SELECT * FROM user WHERE user_id = $id";
                                $result_tasks = mysqli_query($conn, $query);    
                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                            <div class="col l-6">
                                <div class="edit-profile">
                                    <div class="profile-img">
                                        <img src="<?php echo "./admin/upload/" .$row['user_img'];?>"  alt="">     
                                    </div>
                                    <a href="update.php?id=<?php echo $_SESSION["login"][0]?>" class="profile-link edit">Edit Profile</a>
                                </div>
                            </div>
                            <div class="col l-6">
                                <div class="profile-infomarion">
                                    <ul class="profile-infomarion-item">
                                        <li class="profile-infomarion-list">
                                            <span class="profile-infomarion-heading">Full Name</span>
                                            <span class="profile-infomarion-content"><?php echo $row['user_name']; ?></span>
                                        </li>
                                        <li class="profile-infomarion-list">
                                            <span class="profile-infomarion-heading">User Name</span>
                                            <span class="profile-infomarion-content"><?php echo $row['user_username']; ?></span>
                                        </li>
                                        <li class="profile-infomarion-list">
                                            <span class="profile-infomarion-heading">Email Address</span>
                                            <span class="profile-infomarion-content"><?php echo $row['user_email']; ?></span>
                                        </li>
                                        <li class="profile-infomarion-list">
                                            <span class="profile-infomarion-heading">Address</span>
                                            <span class="profile-infomarion-content"><?php echo $row['user_address']; ?></span>
                                        </li>
                                        <li class="profile-infomarion-list">
                                            <span class="profile-infomarion-heading">Contact</span>
                                            <span class="profile-infomarion-content"><?php echo $row['user_contact']; ?></span>
                                        </li>                              
                                    </ul>
                                    <a href="" class="profile-link order">My Orders</a>
                                    <a href="password.php?id=<?php echo $_SESSION["login"][0]?>" class="profile-link password">Change Password</a>
                                </div>
                                
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div>
                <script>
                    let close = document.querySelector('.btn-alert-close')
                    let alert = document.querySelector('.alert');
                    close.onclick = function() {
                        alert.style.display='none';
                    }
                    alert.style.display = "block";
                      setTimeout(()=>{
                        alert.style.display = "none";
                    },3000);
                </script>       
</body>
</html>