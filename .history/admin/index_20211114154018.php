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
        <div class="content__header">
            <h3 class="content__title">Dashboard</h3>
            <div class="cotent__header-nav">
              <a href="index.php" class="content__header-nav-link">Funio / Dashboard</a>
              
            </div>    
          </div>
      </div>
    </div>
<?php include('includes/footer.php'); ?>