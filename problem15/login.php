<?php
	session_start();
	/*if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$connect = mysqli_connect('localhost','root','','phpdb');
		if(!empty($username) && !empty($password)){
			$query = mysqli_query($connect,"INSERT INTO phpdpreg (username,password) VALUES ('$username','$password')");

			if($query){
				$success = "successfully registration done";
			}
		}
		else{
			$error = 'fill all field';
		}*/

		if(isset($_POST['signup'])){
			header('Location: index.php');
			exit();
		}

		$connect = mysqli_connect('localhost','root','','phpdb');

		if(isset($_POST['login'])){
			$login_username = $_POST['username'];
			$login_password = $_POST['password'];
			
			if(!empty($login_username && !empty($login_password))){
			    $login_query = mysqli_query($connect,"SELECT * FROM phpdbreg WHERE username = '$login_username'");

			    $login_fetch = mysqli_fetch_assoc($login_query);
				$username_from_db = $login_fetch['username'];
				$password_from_db = $login_fetch['password'];
				
				if($username_from_db==$login_username && $password_from_db==$login_password){
				$_SESSION['username'] = $login_username;
					header('Location: member.php');
				}
				else{
					$error = "Incorrect Username or Password";
				}
			}
			else{
				$error = 'Please fill all field';
			}
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
	    }
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>my page</title>
	<link rel="stylesheet" href="css/login_style.css">
</head>
<body>
	<center>
		<form action="" method="POST">
			<div class="background">
				<div class="login-background">
					<div class="username">
						<label class="label_user">username</label>
						<input class="input_user" type="text" name="username">
					</div>
					<div class="password">
						<label class="label_password">password</label>
						<input class="input_password" type="password" name="password"><br>
						<label style="color:red"><?php if(isset($error)) echo $error; ?></label>
					</div>
					<div class="button">
						<input class="signin" type="submit" name="login" value="Login">
						<input class="signup" type="submit" name="signup" value="Signup">
					</div>
				</div>
			</div>
		</form>
	</center>
</body>
</html>