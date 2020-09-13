<!DOCTYPE html>
<html lang="en">
<head>
    <title>Problem 4 Output</title>
    <style>
        table{
            width:60%;
            border-collapse: collapse;
            text-align: center;
            margin: 200px auto;
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
    
        <?php
            $con = mysqli_connect("localhost","root","","db");
            if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
            else {
                //echo "Connected with DataBase<br>"; 

                $query = "SELECT * FROM personal_profile";
                $result = mysqli_query($con,$query);
                
                $flag = true;
                $len = 0;
                while ($row=mysqli_fetch_row($result))
                {
                    if($flag){
                        $len = count($row);
                        echo '<table>';
                        echo '<tr style="font-weight:bold; font-size:22px; background-color: skyblue">
                            <th>Name</th>
                            <th>Birth Date</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                        </tr>';
                        $flag = false;
                    }
                    echo "<tr>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                    </tr>";
                }
                echo '</table> ';
                mysqli_close($con);
            
            }
        ?>
    
</body>
</html>