<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>Problem 14</title>
	<style>
		h2,form,div{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Problem 14: Develop a web page that will insert data related to apply online for graduate admission and show that profile in another page.</h2>
		<hr>
		<form method="post" action="output.php">
            <label>Name</label>
			<input type="text" name="name" placeholder="Your name"><br><br>

			<label>SSC Roll</label>
			<input type="number" name="ssc" placeholder="SSC Roll"><br><br>
			
			<label>SSC Year</label>
			<input type="number" name="sscYear" placeholder="SSC Year"><br><br>

            <label>SSC GPA</label>
			<input type="text" name="sscgpa" placeholder="SSC GPA"><br><br>
			
			<label>HSC Roll</label>
			<input type="number" name="hsc" placeholder="HSC Roll"><br><br>
			
			<label>HSC Year</label>
			<input type="number" name="hscYear" placeholder="HSC Year"><br><br>

            <label>HSC GPA</label>
			<input type="text" name="hscgpa" placeholder="HSC GPA"><br><br>

			<input type="submit" name="submit" value="submit">
		</form>
	</div>
</body>
</html>