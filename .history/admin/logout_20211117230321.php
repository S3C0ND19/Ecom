<?php
    session_unset("login");
    session_destroy();
    header("Location: login.php")
?>