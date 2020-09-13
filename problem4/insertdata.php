<!DOCTYPE html>
<html>
<head>
    <title>Problem 4</title>
    <style>
        div{
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <h3>Problem 4: Develop a web page using PHP that will show insert all data of your personal profile and show that profile in another page</h3>
        
        <form name="myForm" action="insertdata.php" method="post">
            <label>Your Name: </label>
            <input type="text" name="name" placeholder="Your Name" required><br><br>

            <label>Birth Date</label>
            <input type="date" name="birthDate" required><br><br>

            <label>Gender:</label>
            <input type="radio" name="gender" value="Male" checked>Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other<br><br>

            <label>Your Email:</label>
            <input type="email" name="email" placeholder="Insert your Email" required><br><br>

            <label>Phone Number: </label>
            <input type="text" name="phoneNumber" placeholder="Insert your phone number" required><br><br>


            <input type="submit" name="submit">
        </form>

        <?php
            if(isset($_REQUEST['submit'])){
                $con = mysqli_connect("localhost","root","","db"); 

                if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
                else {
                    $query = "CREATE TABLE personal_profile
                    (
                        name varchar(50),
                        date varchar(50),
                        gender varchar(50),
                        email varchar(50),
                        phoneNumber varchar(50),
                        primary key(email)
                    )";

                    if(mysqli_query($con,$query)){
                        //it will check there have table or not. and create table
                    }

                    $name = $_POST["name"];
                    $date = $_POST["birthDate"];
                    $gender = $_POST["gender"];
                    $email = $_POST["email"];
                    $phoneNumber = $_POST["phoneNumber"];

                    $query = "INSERT INTO personal_profile VALUES('$name','$date','$gender','$email','$phoneNumber')";

                    
                    if(mysqli_query($con,$query)){
                        echo '<span style="color: green;">Your Data is inserted</span><br><br>';
                    }
                    else echo '<span style="color: red;">Your Data is not inserted</span><br><br>';
                    mysqli_close($con);
                }
            }
            else echo "<br>";
        ?>

        <a href="output.php">Show Your inserted data</a>
    </div>
</body>
</html>