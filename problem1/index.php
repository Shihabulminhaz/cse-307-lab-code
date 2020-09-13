<!DOCTYPE html>
<html>
<head>
	<title>Problem 1</title>
    <style>
        form,h3{
            text-align: center;
        }
        a{
            text-decoration: none;
        }
    </style>
    <script src="script.js"></script>
</head>
<body>
	<h3>Student Profile From</h3>
    
    
    <form name="myFrom" onsubmit="return validateForm()" action="result.php" method="post">
        <label>Your Full Name: </label>
        <input type="text" name="name" placeholder="Insert your Name" /><br><br>

        <label>Birth Date: </label>
        <input type="date" name="birthDate"><br><br> <!----max="2020-07-02" min="2019-07-02 -->

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" checked>Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other<br><br>

        <label>Your Father's name: </label>
        <input type="text" name="father" placeholder="Insert Father's Name" ><br><br>

        <label>Your Mother's name: </label>
        <input type="text" name="mother" placeholder="Insert Mother's Name" ><br><br>

        <label>Your Email:</label>
        <input type="email" name="email" placeholder="Insert your Email" ><br><br>

        <label>Phone Number: </label>
        <input type="phone" name="phoneNumber" placeholder="Insert your phone number"><br><br>

        <label>Your Institution Name: </label>
        <input type="text" name="institution" placeholder="Insert Institution name" ><br><br>

        <label>Your department name: </label>
        <select name="dept">
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
            <option value="ESE">ESE</option>
            <option value="STAT">STAT</option>
        </select><br><br>

        <label>Your Session:</label>
        <select name="session">
            <option value="2016">2015-16</option>
            <option value="2017">2016-17</option>
            <option value="2018">2017-18</option>
            <option value="2019">2018-19</option>
            <option value="2020">2019-20</option>
        </select><br><br>

        <label>Your Roll:</label>
        <input type="number" name="roll" placeholder="Insert Your Roll"><br><br>

        <label>Your Current year and semester:</label>
        <select name="year">
            <option value="1st">1st year</option>
            <option value="2nd">2nd year</option>
            <option value="3rd">3rd year</option>
            <option value="4th">4th year</option>
        </select>
        <select name="semester">
            <option value="1st">1st Semester</option>
            <option value="2nd">2nd Semester</option>
        </select><br><br>

        <input type="submit" name="submit">

    </form>
</body>
</html>