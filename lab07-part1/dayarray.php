<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Days of the Week</title>
</head>
<body>
    <h1>Days of the Week (English)</h1>
    <?php
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        echo "<p>The days of the week in English are: </p>";
        echo "<p>" . implode(", ", $days) . "</p>";
    ?>
    <h1>Days of the Week (French)</h1>
    <?php
        $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
        echo "<p>The days of the week in French are: </p>";
        echo "<p>" . implode(", ", $days) . "</p>";
    ?>

</body>
</html>