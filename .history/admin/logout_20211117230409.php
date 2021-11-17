<?php
    session_unset("login");
    header("Location: login.php")
    session_destroy();
?>