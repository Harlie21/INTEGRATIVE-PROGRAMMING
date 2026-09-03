<!DOCTYPE html>
<html>
<head>
    <title>Student Information Form</title>
</head>

<body>

    <h2>Student Information</h2>

    <form action="welcome.php" method="POST">

        <label>Full Name:</label>
        <input type="text" name="name" placeholder="Enter your full name" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email" required>
        <br><br>

        <label>Year Level:</label>
        <select name="year" required>
            <option value="">Select Year</option>
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
        </select>
        <br><br>

        <label>Section:</label>
        <input type="text" name="section" placeholder="Enter your section" required>
        <br><br>

        <input type="submit" value="Submit">

    </form>

</body>
</html>
