<?php
	session_start();
	if(isset($_SESSION['logged'])){
		$_SESSION['massage'] = "Welcome to main page";
		header('location: main.php');
		return;
	}
	if(isset($_REQUEST['login'])){
		$user = $_REQUEST['username'];
		$pass = $_REQUEST['password'];
		$connection = mysqli_connect("localhost","root","","test");
		$query = "Select * from admin where username='" . $user . "'";
		$result = mysqli_query($connection, $query);
		if($row = mysqli_fetch_row($result)){
			if($pass==$row[5]){
				$_SESSION['logged'] = $row[0];
				$_SESSION['massage'] = 'Login Successful';
				header('location: main.php');
				return;
			}
			else{
				$_SESSION['massage'] = 'password is wrong';
				header('location: login.php');
				return;
			}
		}
		else{
			$_SESSION['massage'] = 'username not found, you may create an account';
			header('location: login.php');
			return;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
	h2,form,div{
		text-align:center;
	}
	a{
		text-decoration: none;
	}
	</style>
</head>
<body>
	<h3>Problem 10: Develop an admin panel with a demo page that will also contain security page having user name and password in the database and logout of option</h3>

	<div>
		<?php
			if(isset($_SESSION['massage'])){
				echo '<br><h2><div style="color:red; text-align: center;">'. $_SESSION['massage']."</div></h2>";
				unset($_SESSION['massage']);
			}
		?>
		<form method="post" action="login.php"><br>
			<label>User Name: </label>
			<input type="text" name="username" placeholder="UserName" required><br><br>
			<label>Password: </label>
			<input type="password" name="password" placeholder="Password" required><br><br>
			<input type="submit" name="login" value="Login">
		</form>
		<br>
		<div class="create"><a href="create.php">Create a New Account</a></div>
	</div>
</body>
</html>