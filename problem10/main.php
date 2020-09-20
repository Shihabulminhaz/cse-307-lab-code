<?php
	session_start();
	if(!isset($_SESSION['logged'])){
		$_SESSION['massage'] = "You must log in first";
		header('location: login.php');
		return;
	}
	if(isset($_REQUEST['logout'])){
		unset($_SESSION['logged']);
		$_SESSION['massage'] = 'logout successful';
		header('location: login.php');
		return;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<style>
		div, form{
			text-align: center;
		}
	</style>
</head>
<body>
	<div>
		<div>
			<?php
				$id = $_SESSION['logged'];
				$connection = mysqli_connect("localhost","root","","test");
				$query = "Select * from page10 where id='" . $id . "'";
				$result = mysqli_query($connection, $query);
				if($row = mysqli_fetch_row($result)){
					$name = $row[2];
					$username = $row[1];
					$phone = $row[3];
					$email = $row[4];
					echo "<h1> Hellow, ". $name . "( (".$username.")</h1>";
				}
			?>
		</div>
		<div>
			<?php
				if(isset($_SESSION['massage'])){
					echo '<h2><div style="color:green; text-align: center;">'. $_SESSION['massage']."</div></h2>";
					unset($_SESSION['massage']);
				}
			?>
		</div>
		<div>
			<h1>this part is for work space for admin pannel.</h1>
		</div>
		<form action="main.php" method="post"><br><br><br>
			<input type="submit" name="logout" value="Log Out">
		</form>
	</div>
</body>
</html>