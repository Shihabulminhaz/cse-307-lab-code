<?php
        echo "<center><h3>Output Table</h3></center>";
        $connect = mysqli_connect("localhost","root","","db");
        if (mysqli_connect_errno()) echo "Failed connect to MySQL: " . mysqli_connect_error();
        else {

            $query = "SELECT * FROM product";
            $result = mysqli_query($connect,$query);
                
            $flag = true;
            $len = 0;
            while ($row=mysqli_fetch_row($result))
            {
                if($flag){
                    $len = count($row);
                    echo '<table style="width:100%">';
                    echo '<tr>
                        <th>Product ID</th>
                         <th>Product Name</th>
                         <th>Cost</th>
                         <th>Sell</th>
                    </tr>';
                    $flag = false;
                }
                echo "<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                     <td>$row[2]</td>
                     <td>$row[3]</td>
                </tr>";
            }

        echo "</table>";
            mysqli_close($connect);
        
         }
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <title>result</title>
    <style>
        table, th, td {
         border: 1px solid black;
        }
        th, td {
              padding: 5px;
             text-align: left;
        }
    </style>
</head>
</html>