<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Using Variables, Arrays and If</title>
</head>
<body>
    <h1>PHP Variables, Arrays and If</h1>
    <?php
        // Declare and initialise an array with values 85, 85, and 95
        $marks = array(85, 85, 95);

        // Modify the second element (index 1) to 90
        $marks[1] = 90;

        // Calculate the average
        $ave = ($marks[0] + $marks[1] + $marks[2]) / 3;

        // Determine status using an if statement
        if ($ave >= 50) {
            $status = "PASSED";
        } else {
            $status = "FAILED";
        }

        // Display the average and status
        echo "<p>The average score is: $ave</p>";
        echo "<p>The status is: $status</p>";
    ?>
</body>
</html>
