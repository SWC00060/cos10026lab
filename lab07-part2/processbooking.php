<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php

        if (isset($_POST["firstname"]) && isset($_POST["lastname"])) {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            
        
            echo "<p>Welcome $firstname $lastname !</p>";

            if (isset($_POST["tour"])) {

                $tours = $_POST["tour"];
                if (is_array($tours)) {
                    $tourString = implode(" and ", $tours);
                    echo "<p>You are now booked on the $tourString</p>";
                } else {
                    echo "<p>Tour selected: $tours</p>";
                }
            }

            if (isset($_POST["species"])) {
                echo "<p>Species: " . $_POST["species"] . "</p>";
            }

            if (isset($_POST["age"])) {
                echo "<p>Age: " . $_POST["age"] . "</p>";
            }

            if (isset($_POST["meal"])) {
                echo "<p>Meal Preference: " . $_POST["meal"] . "</p>";
            }

            if (isset($_POST["partySize"])) {
                echo "<p>Number of travellers: " . $_POST["partySize"] . "</p>";
            }

        } else {
            echo "<p>Something went wrong. Please go back to the <a href='register.html'>register page</a>.</p>";
        }
    ?>
</body>
</html>