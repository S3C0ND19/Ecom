<?php
  ob_start();
  include('config/db.php');
  if (!isset($_SESSION["login"])){
    header("Location: login.php");
  }
?>
<?php include('includes/header.php'); ?>
    <div class="content">
      <?php include('includes/navbar.php'); ?>
      <div class="content-main">
        <h3>hí</h3>
      </div>
    </div>
<?php include('includes/footer.php'); ?>