<?php
$hour = date("H"); // Get the current hour in 24-hour format (00 to 23)

if ($hour < 12) {
    echo "Good Morning";
} else {
    echo "Good Afternoon";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 29</title>
        <style>
            body{
                background-color: pink;
            }
        </style>
</head>
<body>
    <h1>Task 29:</h1>
    <p>Use the If...else statement of PHP to write a code to Display “Good Morning” or “Good Afternoon” according to current time.</p>
    <h3>
    <?php
        $hour = date("H"); // Get the current hour in 24-hour format (00 to 23)

        if ($hour < 12) {
      echo "Good Morning";
        } else {
      echo "Good Afternoon";
}
?>
</h3>
</body>
</html>