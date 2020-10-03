<?php
	if(isset($_POST['login'])){
			header('Location: login.php');
			exit();
		}

	if(isset($_POST['registration'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$connect = mysqli_connect('localhost','root','','phpdb');

		$query_username_check = mysqli_query($connect,"SELECT * FROM phpdbreg WHERE username = '$username'");
		$query_email_check = mysqli_query($connect,"SELECT * FROM phpdbreg WHERE email = '$email'");

		$login_fetch_username_check = mysqli_fetch_assoc($query_username_check);
		$login_fetch_email_check = mysqli_fetch_assoc($query_email_check);

		$username_from_db = $login_fetch_username_check['username'];
		$email_from_db = $login_fetch_email_check['email'];

		
		if(!empty($username) && !empty($email) && !empty($password)){
			if($username_from_db==$username){
				$error = "Username Already exist";
			}
			else if($email_from_db==$email){
				$error = "Email Already exist";
			}
			else{
				$query = mysqli_query($connect,"INSERT INTO phpdbreg (username,email,password) VALUES ('$username','$email','$password')");
	
				if($query){
					$success = "successfully registration done";
					$username = "";
					$email = "";
					$password = "";
				}
			}
		}
		else{
			$error = 'Please fill all field';
		}

		/*if(empty($username)){
			$x = "username must be fill up";
	    }
	    else if (strlen($username)<6) {
	    	echo "username length must greater than 6";
	    }

	    if(empty($password)){
			echo "password must be fill up";
	    }
	    else if (strlen($password)<8) {
	    	echo "password length must greater than 8";
	    }*/
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>my page</title>
	<link rel="stylesheet" href="css/registration_style.css">
	<script src="script.js"></script>
</head>
<body>
	<center>
		<form name="myForm"  onsubmit="return validCreateAccount()" method="POST" action="index.php" >
			<div class="background">
				<div class="login-background">
					<div class="message">
						<label style="color:red"><?php if(isset($error)) echo $error; ?></label>
						<label style="color:green"><?php if(isset($success)) echo $success; ?></label>
					</div>
					<div class="username">
						<label class="label_user">username</label>
						<input class="input_user" type="text" name="username" value="<?php if(isset($username)){echo $username;}?>"><br>
					</div>
					<div class="email">
						<label class="label_email">email</label>
						<input class="input_email" type="email" name="email" value="<?php if(isset($email)){echo $email;}?>"><br>
					</div>
					<div class="password">
						<label class="label_password">password</label>
						<input class="input_password" type="password" name="password" value="<?php if(isset($password)){echo $password;}?>"><br>
					</div>
					<div class="button">
						<input class="signin" type="submit" name="login" value="Login">
						<input class="signup" type="submit" name="registration" value="Signup"><br>
					</div>
				</div>
			</div>
		</form>
	</center>
</body>
</html>