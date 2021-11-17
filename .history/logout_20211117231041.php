<?php
     session_destroy();
     unset($_SESSION['login']);
     header('Refresh: 1; URL = index.php');
?>