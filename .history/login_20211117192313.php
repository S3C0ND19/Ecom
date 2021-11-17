<?php
	ob_start();
	include('config/db.php'); 
	if(isset($_POST['btnSignIn'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$sqlLogin = "SELECT * FROM user WHERE user_username ='$username' AND user_password ='$password' AND user_level = 1 LIMIT 1";
		$result = mysqli_query($conn,$sqlLogin);
		$count_result = mysqli_num_rows($result);
		if ($count_result == 0 ) {
			$_SESSION['message'] = ' Username or Password Wrong! Please try again ...';
        	$_SESSION['message_type'] = 'danger';
        	exit(header('Location: login.php'));
		}
		else {
			$row = mysqli_fetch_row($result);
			if (count(array($row))){
				$_SESSION["login"] = $row;
				header('Location: index.php');
			}else{ 
				echo "Error at adding user<br/>";
				header("refresh:5;url=login.php");
			}
		}

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNIO | Funio Furniture Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/form.css">
    <!-- <link rel="stylesheet" href="./assets/css/toastr.min.css"> -->
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <!-- <link rel="stylesheet" href="./assets/font/themify-icons-font/themify-icons/themify-icons.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://www.editorx.com/favicon.ico" type="image/gif" sizes="16x16">
</head>
<body>
<?php if (isset($_SESSION['message'])) { ?>
    <div style="font-size:1.5rem; font-weight: 500;" class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert" id="success-alert">
        <?= $_SESSION['message']?>
    </div>
<?php session_unset(); } ?>
    <div class="container" id="container">
	    <div class="form-container sign-up-container">
		    <form action="register_submit.php" method="POST">
			    <h1>Create Account</h1>
			    <div class="social-container">
				    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			    </div>
			    <span>or use your email for registration</span>
			    <input type="text" placeholder="Name" name="userName" required/>
			    <input type="email" placeholder="Email" name="userEmail" required/>
			    <input type="password" placeholder="Password" name="userPass" required/>
                <input type="password" placeholder="Repeat Password" name="userRePass" required/>
			    <button type="submit" class="btnSignup" name="btnRegister">Sign Up</button>
		    </form>
	    </div>
	<div class="form-container sign-in-container">
		<form action="#" method="POST">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" placeholder="Username" name="username" required/>
			<input type="password" placeholder="Password" name="password" required/>
			<a href="#">Forgot your password?</a>
			<button type="submit" class="btnSubmit" name="btnSignIn">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back Admin!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Admin!</h1>
				<p>Enter details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/form.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/toastr.min.js"></script>
    <script>
        setTimeout(()=>{
        var alertId = document.getElementById('success-alert')
        alertId.style.display="none"
        },5000);
    </script>
</body>
</html>

