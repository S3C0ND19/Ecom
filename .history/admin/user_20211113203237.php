<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="content">
        <?php include('includes/navbar.php'); ?>
        <div class="content-main">
            <?php if (isset($_SESSION['message'])) { ?>
            <div style="font-size:1.5rem; font-weight: 500;" class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); } ?>
            <div class="content__header">
                <h3 class="content__title">User List</h3>     
            </div>
            <div class="content__table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row" style="font-size:1.5rem; padding-bottom:20px; font-weight:500;">Image</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Level</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Name</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Username</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Password</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Contact</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM user";
                                $result_tasks = mysqli_query($conn, $query);    
                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                            <tr style="border-bottom: 1px solid #dee2e6; ">
                                <td>
                                    <img src="<?php echo "./upload/" .$row['user_img'];?>" width="60px" height="60px" alt="" style="transform: translateY(15px);">     
                                </td>
                                <td style="padding-bottom: 25px;font-size:1.5rem;">
                                    <?php 
                                        if($row["user_level"] == 1)
                                            echo "Admin";
                                        else
                                            echo "User";
                                    ?>
                                </td>                               
                                <td style="padding-bottom: 25px;font-size:1.5rem;"><?php echo $row['user_name']; ?></td>
                                <td style="padding-bottom: 25px;font-size:1.5rem;"><?php echo $row['user_username']; ?></td>
                                <td style="padding-bottom: 25px;font-size:1.5rem;"><?php echo $row['user_password']; ?></td>
                                <td style="padding-bottom: 25px;font-size:1.5rem;"><?php echo $row['user_contact']; ?></td>                                      
                                <td>
                                    <a style="font-size:1.5rem; margin-right:20px;" href="edit_user.php?id=<?php echo $row['user_id']?>" class="btn btn-sm ">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a style="font-size:1.5rem" href="delete_user.php?id=<?php echo $row['user_id']?>" class="btn btn-sm">
                                        <i class="far fa-trash-alt"></i>
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