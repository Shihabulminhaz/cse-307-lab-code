<DOCTYPE html>
<html>
<head>
    <title>Problem 6</title>
	<style>
		   table{
            width:60%;
            border-collapse: collapse;
            text-align: center;
            margin: 100px auto;
        }
        th,tr,td{
            border: 1px solid #dddddd;
            padding: 8px;
        }
        td{
            text-transform: uppercase;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        tr:hover{
            background:#ffff;
        }
	</style>
</head>
<body>
	<div class="container">
		<center><h3>Problem 6: Write a PHP program that will show all data stored in a database containing student's profile</h3></center>
		<center><h1>Student's Profile</h1></center>
		<?php
			$con = mysqli_connect("localhost","root","","db");
			if(mysqli_connect_errno()) echo "<br>Can not connect to database";
			else{
				$query = "select * from student";
				$result = mysqli_query($con,$query);
                
                $flag = true;
                $len = 0;
                while ($row=mysqli_fetch_row($result))
                {
                    if($flag){
                        $len = count($row);
                        echo '<table>';
                        echo '<tr style="font-weight:bold; font-size:22px; background-color: skyblue">
                            <th>Roll</th>
                            <th>Name</th>
                            <th>University</th>
                            <th>Dept.</th>
                            <th>Year</th>
                            <th>Session</th>
                        </tr>';
                        $flag = false;
                    }
					echo '<tr>';
					for ($i = 0; $i < 6; $i++){
                        echo "<td>$row[$i]</td>";
                    }
					echo '</tr>';
                }
                echo '</table> ';
                mysqli_close($con);
			}
		?>
	
	</div>
</body>
</html>