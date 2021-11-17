<?php
    session_destroy();
    session_unset("login");
    if(isset($_COOKIE['login'])):
        setcookie('login', '', time()-7000000, '/');
    endif;
    header("Location: login.php")
?>