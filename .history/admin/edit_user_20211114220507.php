<?php
include('config/db.php');
$name = '';
$level = '';
$username = '';
$password = '';
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
    $password = $row['user_password'];
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
  $password = $_POST['userPassword'];
  $new_image = $_FILES['userImage']['name'];
  $address = $_POST['userAddress'];
  $contact = $_POST['userContact'];
  if ($new_image != ''){
    $update_filename = $_FILES['userImage']['name'];
  }
  else{
    $update_filename = $old_image;
  }
  $password = md5($password);
  $query = "UPDATE user set user_level='$level',user_img='$update_filename',user_name='$name', user_email='$email', user_username ='$username', user_password='$password',user_address='$address', user_contact='$contact' WHERE user_id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'User Updated Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: user.php');
}
?>
<?php include('includes/header.php'); ?>
  <div class="content">
      <?php include('includes/navbar.php'); ?>
      <div class="modal-main">
        <div class="modal-header">
          <h2 class="modal-title">Edit User</h2>
        </div>
        <div class="modal-body">
          <form action="edit_user.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <label for="name-input" class="form-title">Name</label>
                    <input type="text" class="form__input" name="nameUser" required placeholder="Name..." id="name-input" value="<?php echo $name; ?>">
                  </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-title">Level</label>
                    <select style="width:10%;padding:10px 0;font-size:1.5rem;font-weight:500;" name="sltLevel">
                      <option value="1" selected>Admin</option>
                      <option value="0">Users</option>
                    </select>
                </div>
              </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <label class="form-title" for="username-input">UserName</label>
                    <input type= "text" required class="form__input" name="userName" placeholder="UserName..." id="username-input" value="<?php echo $username ; ?>">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <label class="form-title" for="email-input">Email</label>
                    <input type="email" class="form__input" name="userEmail" placeholder="Email..." id="email-input" required value="<?php echo $email ; ?>">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <label class="form-title" for="password-input">Password</label>
                    <input type="password" class="form__input" name="userPassword" placeholder="Password..." id="password-input" required >
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <label class="form-title" for="form__input-img">User Image <small>(format: jpg, jpeg, png)</small></label>
                    <input type="file" name="userImage" class="form__input form__input-img">
                  </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <label class="form-title" for="address-input">Address
                    <input type="text" class="form__input" name="userAddress" placeholder="Address..." id="address-input" value="<?php echo $address; ?>">
                </div>
              </div>
              <div class="col-12">
                  <div class="form-group">
                      <label class="form-title" for="contact-input">Contact</label>
                      <input type="text" class="form__input" name="userContact" placeholder="Contact..." id="contact-input" value="<?php echo $contact; ?>">
                  </div>
              </div>
              <div class="col-12">
                  <div class="button-edit">
                      <button class="btn btn-danger edit" name="btnCancel">Cancel</button>
                      <button class="btn btn-success edit" name="btnEdit">Save</button>
                  </div>
              </div>
            </div>         
          </form>
        </div>
      </div>
  </div>
<?php include('includes/footer.php'); ?>