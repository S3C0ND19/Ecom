<?php
    session_destroy();
    session_unset("login");
    if(isset($_COOKIE[session_name()])):
        setcookie(session_name(), '', time()-7000000, '/');
    endif;
    if(isset($_COOKIE['login'])):
        setcookie('login', '', time()-7000000, '/');
    endif;
    setcookie('PHPSESSID', '', time() - 86400, '/folder/');
    header("Location: login.php")
?>