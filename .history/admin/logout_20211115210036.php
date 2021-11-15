<?php
    session_destroy();
    session_unset("login");
    setcookie('test', 'SO test cookie' , time() - 3600);
    header("Location: login.php")
?>