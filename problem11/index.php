<!DOCTYPE html>
<html>
<head>
	<title>Problem 11</title>
</head>
<body>
	<center>
		<h2>Problem 11: Write a PHP program that will store all data in a database retrieving from a form containing electronics product info.</h2>
		<form method="post" action="index.php">
			<label>Product Name: </label>
			<input type="text" name="name" placeholder="Product Name"><br><br>
			
			<label>Hired From: </label>
			<input type="text" name="country" placeholder="Country Name"><br><br>
			
			<label>How many?: </label>
			<input type="number" name="count" placeholder="Number of this Product"><br><br>
			
            <label>Model number</label>
			<input type="text" name="model" placeholder="model"><br><br>

			<label>How much Price per piece: </label>
			<input type="number" name="price" placeholder="Price per piece"><br><br>
			
			
			<input type="submit" name="submit" value="submit">
		</form>

		<?php
			if(isset($_REQUEST["submit"])){
				$con = mysqli_connect("localhost","root","","db");
				if(mysqli_connect_errno()) echo "<br>Connection Error";
				else{
					$query = "create table product_price
					(
						name varchar(50),
						country varchar(50),
						count numeric(50),
                        model varchar(50),
                        price numeric(50),
						primary key(name,model)
                    )";
                    
					if(mysqli_query($con,$query)){
					}
					
					$name = $_POST["name"];
					$country = $_POST["country"];
					$count = $_POST["count"];
                    $model = $_POST["model"];
                    $price = $_POST["price"];
					
					$query = "insert into product_price values('$name' , '$country' , '$count' , '$price' , '$model')";
					if(mysqli_query($con,$query)){
						echo "<br>Your data is inserted.";
					}
					else echo "<br>Your data is not inserted.";
				}
				mysqli_close($con);
			}
		?>
	</center>

</body>
</html>