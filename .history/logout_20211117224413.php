<?php
    session_unset("login");
    session_destroy();
    header("Location: index.php")
?>