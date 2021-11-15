<?php
    session_destroy();
    unset($_COOKIE['login']);
    setcookie("login", "", time() - 300,"/");
    header("Location: login.php")
?>