<?php
    session_destroy();
    setcookie('test', 'SO test cookie' , time() - 3600);
    header("Location: login.php")
?>