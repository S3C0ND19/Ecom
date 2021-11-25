<?php

include('./config/db.php');
if (isset($_POST['btnRegister']) && $_POST["userName"] !='' && $_POST["userEmail"] !='' && $_POST["userPass"] !='' && $_POST["userRePass"] !='' ){
    $level = '0';
    $img =  $_POST['image'];
    $username = $_POST['userName'];
    $email = $_POST['userEmail'];
    $password = $_POST['userPass'];
    $repassword = $_POST['userRePass'];
    $result = '';
    if ($password !=  $repassword){
        $_SESSION['message'] = 'Password Repeat is not correct ! Please try again...';
        $_SESSION['message_type'] = 'warning';
        exit(header('Location: login.php'));
    }
    $rsUser = "SELECT * FROM user WHERE user_username ='$username' LIMIT 1" ;
    $rsEmails = "SELECT * FROM user WHERE user_email ='$email' LIMIT 1" ;
    $resultUser = mysqli_query($conn, $rsUser);
    $resulEmails = mysqli_query($conn, $rsEmails);
    $count_email = mysqli_num_rows($resulEmails);
    $count_user = mysqli_num_rows($resultUser);
    if($count_email > 0 || $count_user > 0 ){
		$_SESSION['message'] = ' Username or Email already exist! Please try again ...';
        $_SESSION['message_type'] = 'warning';
        exit(header('Location: login.php'));
    }else{
        $password =md5($password);
        $query = "INSERT INTO user (user_level,user_img,user_username, user_email, user_password ) VALUES ('$level','$img','$username','$email', '$password')";
        $result = mysqli_query($conn, $query);
        if($result){
            $_SESSION['message'] = 'Sign Up Success . You can login!';
            $_SESSION['message_type'] = 'success';
            header('Location: login.php');
        }
        else
        {
            echo "Error at adding user<br/>";
            header("refresh:5;url=login.php");
        }
    }
    }else{
        header('Location: login.php');
    }
?>