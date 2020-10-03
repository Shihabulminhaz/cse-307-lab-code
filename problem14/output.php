<?php
	if(isset($_REQUEST["submit"])){
		echo "Name: " . $_POST["name"]."<br>";
		echo "About SSC, Roll: " . $_POST["ssc"] . "; " . "Year: " . $_POST["sscYear"] . "; " . "GPA: ". $_POST["sscgpa"]."<br>";
		echo "About HSC, Roll: " . $_POST["hsc"] . "; " . "Year: " . $_POST["hscYear"] . "; " . "GPA: ". $_POST["hscgpa"]."<br>";
	}
?>