<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location: index.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>my page</title>
</head>
<body>
	<h1>Hello <?php echo $_SESSION['username'] ?> ,</h1>
	<a href="logout.php"><input type="submit" name="logout" value="Log Out"></a><br>
	<a href="update.php"><input type="submit" name="changepassword" value="change password"></a><br></a><br>

</body>
</html>