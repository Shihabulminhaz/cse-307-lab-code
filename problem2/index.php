<?php
    if(isset($_REQUEST['submit'])){

            $id = $_POST["id"];
            $name = $_POST["name"];
            $cost = $_POST["cost"];
            $sell = $_POST["sell"];

            $connect = mysqli_connect("localhost","root","","db"); 

            if (mysqli_connect_errno()) echo "Failed connect to MySQL: " . mysqli_connect_error();
            else {
                    $query = "create table product
                    (
                        id varchar(50),
                        name varchar(30),
                        cost numeric(12,2),
                        sell numeric(12,2),
                        primary key(id)
                    )";

                    if(mysqli_query($connect,$query)){
                        // table toiri hobe, jodi na thake
                    }


                    $query = "INSERT INTO product values('$id','$name','$cost','$sell')";

                    if(mysqli_query($connect,$query)){
                        $messege = "Your Data is stored Successfully<br>";
                    }
                    else $messege = "Your Data is not Inserted BeCause, Same product ID is already stored.<br>";

                    mysqli_close($connect);
            }
     }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Problem 2</title>
    <style>
        div{
            text-align: center;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div>
        <h3>Input Product Details</h3>
        <form action="" method="post">
            <label>Product ID: </label>
            <input type="number" name="id"><br><br>

            <label>Product Name: </label>
            <input type="text" name="name"><br><br>

            <label>Production Cost: </label>
            <input type="number" name="cost"><br><br>

            <label>Selling price: </label>
            <input type="number" name="sell"><br><br>

            <input type="submit" name="submit">
        </form>

        <?php
            if(isset($messege)) echo $messege;
        ?>
        <a href="result.php">Show all stored data</a>
    </div>
</body>
</html>