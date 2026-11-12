<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Used Car Inventory</title>
</head>
<body>

    <h2>Used Car Inventory</h2>

    <?php
    require_once("settings.php");

    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    //check connection
    if ($conn) {
        $query = "SELECT * FROM cars WHERE yom > 2010";
        $result = mysqli_query($conn, $query);

        //check query
        if ($result) {
            $num_rows = mysqli_num_rows($result);

            //check data
            if ($num_rows > 0) {
                echo "<table border='1'>"; 
                echo "<tr>
                        <th>Car ID</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Price</th>
                        <th>YOM</th>
                      </tr>";
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['car_id'] . "</td>";
                    echo "<td>" . $row['make'] . "</td>";
                    echo "<td>" . $row['model'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['yom'] . "</td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            } else {
                echo "<p>There are no cars to display.</p>";
            }
            
            mysqli_free_result($result);
        } else {
            echo "<p>Database query failed.</p>";
        }
        
        mysqli_close($conn);
    } else {
        echo "<p>Database connection failure.</p>";
    }
    ?>

</body>
</html>