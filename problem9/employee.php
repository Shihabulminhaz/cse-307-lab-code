<?php
    $massage = "";
    function isName($name){
        if (!preg_match("/^[a-zA-Z-' .]*$/",$name)) return "Only letters, white space and dot are allowed";
        else return "";
    }
    function isValidEmail($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format";
        }
        return "";
    }
    if(isset($_REQUEST['submitted'])){
        if(isName($_REQUEST['name']) != ""){
            $massage = '<span style="color:red;">'. isName($_REQUEST['name']) . " in Full Name Section</dspan>";
        }
        else if(isName($_REQUEST['title']) != ""){
            $massage = '<span style="color:red;">'. isName($_REQUEST['title']) . " in Ttile Section</span>";
        }
        else if(isValidEmail($_REQUEST['email']) != ""){
            $massage = '<span style="color:red;">'. isValidEmail($_REQUEST['email']) ." </span>";
        }
        else $massage = '<span style="color:green;">Your Data is Submitted</span>';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Problem 9</title>
</head>
<body>

<center>
    <h3>Problem 9: Write a PHP program that will validate all data retrieving from a form containing employee’s profile</h3>
        <?php
            echo "<br><h3>".$massage."</h3>";
            $massage = "";
        ?>
        <br><form action="employee.php" method="post">
            <label>Full Name: </label><br>
            <input type="text" name="name" placeholder="Name" required><br><br>
            <label>Title: </label><br>
            <input type="text" name="title" placeholder="title" required><br><br>
            <label>Email: </label><br>
            <input type="email" name="email" placeholder="email" required><br><br>
            <label>Birth Date: </label><br>
            <input type="date" name="bdate" required><br><br>
            <label>Hired Date: </label><br>
            <input type="number" name="phone" placeholder="Phone Number" required><br><br>
            <label>Home Address: </label><br>
            <textarea type="text" name="address" placeholder="Home Address" required></textarea><br><br>
            <label>Notes: </label><br>
            <textarea type="text" name="Notes" placeholder="Notes" required></textarea><br><br>
            <input type="submit" name="submitted">
        </form>
    </center>
</body>
</html>