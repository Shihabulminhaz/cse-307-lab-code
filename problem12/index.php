<DOCTYPE html>
<html>
<head>
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
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        tr:hover{
            background:#ffff;
        }
        h2,h4{
            text-align: center;
        }
	</style>
</head>
<body>
    <h2>Problem 12: Design a webpage that will show the list stored in a database containing student's profile with a link to delete them.</h2>
    <hr>
    <h4>Students Profile</h4>
    <?php
        $con = mysqli_connect("localhost","root","","db");
        $delete = false;
        if(mysqli_connect_errno()) echo "<br>Can not connect to database";
        else{
            if($_GET["delete"]!=""){
                $delete = $_GET["delete"];
                $query = "select Roll from student where Roll='$delete'";
                $result = mysqli_query($con,$query);
                $row = mysqli_fetch_assoc($result);
                if($row["Roll"]!="") $delete = true;
                else $delete = false;
                $query = "delete from student where Roll = '$delete'";
                mysqli_query($con,$query);
                $delete = true;
            }
            
            $query = "select * from student";
            $result = mysqli_query($con,$query);
            $first = true;
            while($row = mysqli_fetch_row($result)){
                if($first){
                    echo '<table>';
                        echo '<tr style="font-weight:bold; font-size:22px; background-color: skyblue">
                            <th>Roll</th>
                            <th>Name</th>
                            <th>University</th>
                            <th>Dept.</th>
                            <th>Year</th>
                            <th>Session</th>
                            <th>Delete</th>
                        </tr>';
                    $first = false;
                }
                echo '<tr>';
					for ($i = 0; $i < 6; $i++){
                        echo "<td>$row[$i]</td>";
                    }
                    echo "<td> <a href=\"index.php?delete=$row[0]\">delete</a></td>";
                echo '</tr>';
            }
            if($delete==true){
                echo "<br>deleted successfully";
            }
        }
    ?>
</body>
</html>