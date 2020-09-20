<!DOCTYPE html>
<html>
<head>
    <title>Problem 8</title>
    <style>
        form,h4,h1,h3{
            text-align: center;
        }
    </style>
    <script src="script.js"></script>
</head>
<body>
    <h4>Problem 8: Design a DHTML’s form for employee’s profile and validate all data retrieving from a form using JavaScript</h4>
    <div class="container">
        <br><form name="myFrom" onsubmit="return validateForm()" action="output.php" method="post">
            <label>Name: </label><br>
            <input type="text" name="name" placeholder="Name" required><br><br>
            <label>Birth Date: </label><br>
            <input type="date" name="birthDate" ><br><br>
            <label>Phone Number: </label><br>
            <input type="number" name="phoneNumber" placeholder="Phone Number" ><br><br>
            <label>Home Address: </label><br>
            <textarea type="text" name="address" placeholder="Home Address" ></textarea><br><br>
            <label>Notes: </label><br>
            <textarea type="text" name="Notes" placeholder="Notes" ></textarea><br><br>
            <input type="submit" name="submitted">
        </form>
    </div>
</body>
</html>