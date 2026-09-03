<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>

<body>

    <h2>Student Information Submitted</h2>

    <?php

    $name = $_GET["name"];
    $email = $_GET["email"];
    $year = $_GET["year"];
    $section = $_GET["section"];

    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Year Level: " . htmlspecialchars($year) . "<br>";
    echo "Section: " . htmlspecialchars($section);

    ?>

</body>
</html>
