<?php
require_once('settings.php');

if (isset($_GET['model'])) {
    $model = mysqli_real_escape_string($conn, $_GET['model']);
    
    $sql = "SELECT car_id, make, model, price, yom FROM cars WHERE model LIKE '$model'";
    
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><<th>Model</th><th>Price</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
    
         
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "🚫 No matching cars found.";
    }
} else {
    echo "Please enter a model to search.";
}

mysqli_close($conn);
?>
