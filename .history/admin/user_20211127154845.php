<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="content">
        <?php include('includes/navbar.php'); ?>
        <div class="content-main">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="toast-mess-container">
                <button class=" alert-toast-message alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                        <i  onclick="deleteAlert()"  class=" alert-toast-message-icon ti-close"></i>
                    </button>
               </div>
            <?php session_unset(); } ?>
            <div class="content__header">
                <h3 class="content__title">User | Admin</h3>
                <div class="cotent__header-nav">
                    <a href="index.php" class="content__header-nav-link">Dashboard / User</a> 
                </div>         
            </div>
            <div class="content__table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row" class="table-header-value">Image</th>
                                <th scope="row" class="table-header-value">Role</th>
                                <th scope="row" class="table-header-value">Name</th>
                                <th scope="row" class="table-header-value">Username</th>
                                <th scope="row" class="table-header-value">Password</th>
                                <th scope="row" class="table-header-value">Address</th>
                                <th scope="row" class="table-header-value">Contact</th>
                                <th scope="row" class="table-header-value">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM user";
                                $result_tasks = mysqli_query($conn, $query);    
                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                            <tr style="border-bottom: 1px solid #dee2e6; ">
                                <td>
                                    <img src="<?php echo "./upload/" .$row['user_img'];?>" width="60px" height="60px" alt="" >     
                                </td>
                                <td>
                                    <span class="textfill">
                                    <?php 
                                        if($row["user_level"] == 1)
                                            echo "Admin";
                                        else
                                            echo "User";
                                    ?>
                                    </span>                                  
                                </td>                               
                                <td style="font-size:1.5rem;"><?php echo $row['user_name']; ?></td>
                                <td style="font-size:1.5rem;"><?php echo $row['user_username']; ?></td>
                                <td style="font-size:1.5rem;">
                                   
                                    <?php 
                                     if($row['user_password']=="202cb962ac59075b964b07152d234b70"){
                                        echo "123";
                                     }
                                     ?>
                                </td>
                                <td style="font-size:1.5rem;"><?php echo $row['user_address']; ?></td>
                                <td style="font-size:1.5rem;"><?php echo $row['user_contact']; ?></td>                                      
                                <td>
                                    <a style="font-size:1.5rem; margin-right:20px;" href="edit_user.php?id=<?php echo $row['user_id']?>" class="btn btn-sm ">
                                        <span class="iconify" data-icon="uil:pen"></span>
                                    </a>
                                    <a style="font-size:1.5rem" href="delete_user.php?id=<?php echo $row['user_id']?>" class="btn btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">
                                        <span class="iconify trash" data-icon="uil:trash-alt"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>