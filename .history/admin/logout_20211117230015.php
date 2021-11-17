<?php
    session_destroy();
    session_unset("login");
    setcookie('phpsessid','value',time()-1);
    header("Location: login.php")
?>