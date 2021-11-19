<?php
     session_destroy();
     session_unset("login");
     unset($_SESSION['login']); 
     header("Location: index.php");
     die();
?>