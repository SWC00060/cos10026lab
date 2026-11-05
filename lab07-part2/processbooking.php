<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    
    <?php
  
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    echo "<p>Welcome $firstname $lastname, you have successfully booked !</p>";
    ?>
</body>
</html>