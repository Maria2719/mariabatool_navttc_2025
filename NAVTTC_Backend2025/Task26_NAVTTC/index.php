 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 26</title>
    <style>
            body{
                background-color: indigo;
                color: white;
            }
        </style>
</head>
<body>
<h1>Task 26:</h1>   
<p>simply Use the Switch statement of PHP to display the current day of the week.</p> 

<h3>

<?php

$day = date("l"); // Get current day (e.g., Monday, Tuesday, etc.)

switch ($day) {
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    case "Thursday":
        echo "Today is Thursday";
        break;
    case "Friday":
        echo "Today is Friday";
        break;
    case "Saturday":
        echo "Today is Saturday";
        break;
    case "Sunday":
        echo "Today is Sunday";
        break;
    default:
        echo "Unknown day";
}
?>
</h3>

</body>
</html>