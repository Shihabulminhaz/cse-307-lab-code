<?php
    session_start();
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $dept = $_REQUEST['dept'];
        $position = $_REQUEST['position'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $con = mysqli_connect("localhost","root","","db");
        $query = "UPDATE teacher SET
            Name = '$name',
            Dept. = '$dept',
            Position = '$position',
            Phone = '$phone',
            Email = '$email',
            where id = $id";
        mysqli_query($con, $query);
        $_SESSION['massage'] = 'The Data of '.$name. ' is updated';
       header('location: teacherdata.php');
        //return;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Problem 7</title>
    <style>
        form{
            text-align: center;
        }
    </style>
</head>
<body><br>
    <?php
        $con = mysqli_connect("localhost","root","","db");
        $query = 'Select * from teacher where id='.$_REQUEST['id'];
        $result = mysqli_query($con, $query);
        if($row = mysqli_fetch_row($result)){
            echo '<form action="teacheredit.php" method="post">
                <label>Name: </label><br>
                <input type="text" name="name" value="'. $row[1] .'"><br>
                <label>Dept.: </label><br>
                <input type="text" name="dept" value="'. $row[2] .'"><br>
                <label>Position: </label><br>
                <input type="text" name="position" value="'. $row[3] .'"><br>
                <label>Phone: </label><br>
                <input type="text" name="phone" value="'. $row[4] .'"><br>
                <label>Email: </label><br>
                <input type="email" name="email" value="'. $row[5] .'"><br>
                <input type="hidden" name="id" value="'. $row[0] .'"><br>
                <input type="submit" name="update" value="update">
            </form>';
        }
    ?>
</body>
</html>