<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="content">
        <?php include('includes/navbar.php'); ?>
        <div class="content-main">
            <?php if (isset($_SESSION['message'])) { ?>
                <div style="font-size:1.5rem; font-weight: 500;" class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                    <button type="button" class="close btn-close" onclick="deleteAlert()"  aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>
        </div>
    </div>
<?php include('includes/footer.php'); ?>