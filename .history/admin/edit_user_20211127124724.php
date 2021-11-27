<?php
include('config/db.php');
$name = '';
$level = '';
$username = '';
$new_password = '';
$renew_password = '';
$email = '';
$new_image='';
$address = '';
$contact = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM user WHERE user_id = $id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $level = $row['user_level'];
    $old_image = $row['user_img'];
    $name = $row['user_name'];
    $email = $row['user_email'];
    $username = $row['user_username'];
    $old_password = $row['user_password'];
    $address = $row['user_address'];
    $contact = $row['user_contact'];
  }
}
if (isset($_POST['btnEdit'])) {
  $id = $_GET['id'];
  $name = $_POST['nameUser'];
  $level = $_POST['sltLevel'];
  $username = $_POST['userName'];
  $email= $_POST['userEmail'];
  $new_image = $_FILES['userImage']['name'];
  $password = $_POST['userNewPassword'];
  $renew_password  = $_POST['userNewRePassword'];
  $address = $_POST['userAddress'];
  $contact = $_POST['userContact'];
  if ($new_image != ''){
    $update_filename = $_FILES['userImage']['name'];
  }
  else{
    $update_filename = $old_image;
  }
  if ($password !=  $renew_password){
    $_SESSION['message'] = 'Password Repeat is not correct ! Please try again...';
    $_SESSION['message_type'] = 'warning';
    exit(header('Location: edit_user.php'));
  }else {
    if ($password  != '' &  $renew_password != ''){
      $update_password =  md5($_POST['userNewPassword']);
    }
    else{
      $update_password =  $old_password;
    }
  }
  $query = "UPDATE user set user_level='$level',user_img='$update_filename',user_name='$name', user_email='$email', user_username ='$username', user_password='$update_password',user_address='$address', user_contact='$contact' WHERE user_id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'User Updated Successfully';
  $_SESSION['message_type'] = 'info';
  header('Location: user.php');
}
if (isset($_POST['btnCancel'])){
  header('Location: user.php');
}
?>
<?php include('includes/header.php'); ?>
  <div class="content">
      <?php include('includes/navbar.php'); ?>
      <div class="modal-main">
        <div class="content__header">
          <h3 class="content__title">Edit User | Admin</h3>
            <div class="cotent__header-nav">
              <a href="index.php" class="content__header-nav-link">Dashboard / User | Admin</a> 
            </div>
        </div>
        <div class="modal-body">
          <form action="edit_user.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-content-edit">                   
                  <div class="form-add-input">
                    <div class="form-add-heading">
                      <div class="form-add-description">
                        <span class="form-add-description-number">01</span>
                        <div class="form-add-description-details">
                          <p>Billing Info</p>
                          <span>Fill all infomation below</span> 
                        </div>
                      </div>
                      <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="form-add-content">
                      <div class="form-group">
                          <label for="name-input" class="form-title">Name</label>
                          <input type="text" class="form-control form__input" name="nameUser" required id="name-input" value="<?php echo $name; ?>" />
                      </div>  
                      <div class="form-add-wrapper">
                        <div class="form-group form-add-input-child">
                          <label class="form-title">Level</label>
                          <select class="form-select level form__input" name="sltLevel">
                              <option value="1" selected>Admin</option>
                              <option value="0">Users</option>
                          </select>
                        </div>
                        <div class="form-group  form-add-input-child ">
                            <label class="form-title">Address</label>
                            <input type="text" class="form-control form__input" name="userAddress" value="<?php echo $address; ?>"/>                      
                        </div>
                        <div class="form-group  form-add-input-child">
                            <label class="form-title">Contact</label>
                            <input type="text" class="form-control form__input" name="userContact"  required value="<?php echo $contact; ?>"/>      
                        </div>
                      </div>                  
                      <div class="form-add-wrapper">
                        <div class="form-group  form-add-select-child ">
                            <label class="form-title">UserName</label>
                            <input type="text" class="form-control form__input" name="userName" required value="<?php echo $username; ?>"/>                      
                        </div>
                        <div class="form-group  form-add-select-child">
                            <label class="form-title">Email</label>
                            <input type="email" class="form-control form__input" name="userEmail" required value="<?php echo $email; ?>"/>      
                        </div>
                      </div>
                      <div class="form-add-wrapper">
                        <div class="form-group form-add-select-child">
                            <label class="form-title">New Password</label>
                            <input type="password" class="form-control form__input" name="userNewPassword"/>     
                        </div>
                        <div class="form-group form-add-select-child">
                            <label class="form-title">Repeat New Password</label>
                            <input type="password" class="form-control form__input" name="userNewRePassword"/>  
                        </div>
                      </div>                     
                    </div>
                  </div>
                  <div class="form-add-files">
                    <div class="form-add-heading">
                      <div class="form-add-description">
                        <span class="form-add-description-number">02</span>
                        <div class="form-add-description-details">
                          <p>Users Image</p>
                          <span>Fill all infomation below</span> 
                        </div>
                      </div>
                      <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="form-add-content">
                      <div class="form-dropzone-img">
                        <div class="form-group">
                            <label  class="product__header product__header-img">User Image</label>
                            <label class="dropzone" for="input-img" id="dropzoneFrom" style="width:200px;height:200px;">
                              <div class="dropzone-message-text">
                                <div class="mb-3">
                                  <i class=" display-4 text-muted fas fa-cloud-upload-alt"></i>
                                </div>
                                  <h4>Click here to upload.</h4>
                                  <input multiple type="file" hidden name="userImage" autocomplete="off"  id="input-img"class="product__input product__input-img dropzone-img" />
                              </div>
                            </label>
                        </div>
                      </div>                   
                    </div>   
                  </div>              
                  <div class="button-edit">                      
                        <button class="btn btn-danger edit" name="btnCancel">
                          <i class="fas fa-times"></i>
                          Cancel
                        </button>
                        <button type="submit"class="btn btn-success edit" name="btnEdit" >
                            <i class="far fa-save">
                              </i>
                            Save
                        </button>
                    </div>
            </div>      
          </form>
        </div>
      </div>
  </div>
<?php include('includes/footer.php'); ?>