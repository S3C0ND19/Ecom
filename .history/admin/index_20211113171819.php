<?php
  ob_start();
  session_start();
  if (!isset($_SESSION["login"])){
    header("Location: login.php");
  }
  include('config/db.php');
?>
<?php include('includes/header.php'); ?>
    <div class="content">
      <?php include('includes/navbar.php'); ?>
    </div>
<?php include('includes/footer.php'); ?>