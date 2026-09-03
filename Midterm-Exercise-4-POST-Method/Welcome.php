<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>

<body>

    <h2>Student Information Submitted</h2>

    <?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $year = $_POST["year"];
    $section = $_POST["section"];

    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Year Level: " . htmlspecialchars($year) . "<br>";
    echo "Section: " . htmlspecialchars($section);

    ?>

</body>
</html>
