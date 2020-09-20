<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Problem 7</title>
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
        a{
            text-decoration: none;
        }
    </style>
</head>
<body><br>
    <center><h3>Problem 7: Write a PHP program that will able to edit all data stored in a database containing teacher’s profile</h3></center>
    <?php
        $con = mysqli_connect("localhost","root","","db");
        $query = "Select * from teacher";
        $result = mysqli_query($con, $query);
        $flag = true;
        if(isset($_SESSION['massage'])) {
            echo "<span style='color:green; text-align:center;'><h3>".$_SESSION['massage']."<br><br></h3></span>";
            unset($_SESSION['massage']);
        }
        while ($row=mysqli_fetch_row($result))
        {
            if($flag){
                $len = count($row);
                echo '<table>';
                echo '<tr style="font-weight:bold; font-size:22px; background-color: skyblue">
                    <th>Name</th>
                    <th>Dept.</th>
                    <th>Position</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>';
                $flag = false;
            }

            echo '<tr>';
            for ($i = 1; $i < 6; $i++){
                echo "<td>$row[$i]</td>";
            }
            echo '<td><a href="teacheredit.php?id='. $row[0] .'">Edit</a></td>'; 
            echo '</tr>';
        }
        echo '</table> ';
        mysqli_close($con);
    ?>
</body>
</html>