<?php
    session_destroy();
    session_unset("login");
    header("Location: login.php")
?>