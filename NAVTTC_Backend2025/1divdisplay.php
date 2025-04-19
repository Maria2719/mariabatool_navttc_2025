<?php

/* 1. Create variables for name, age, department, and city.
    Display the details inside an HTML <div> using.
*/

$name = "Khansa Batool";
$age = 10;
$dept = "IIUIS";
$city= "Hyderabad";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Display in Div</title>
</head>
    <body>

        <h1>TASK 1</h1>
            <div>
            
                <h3> <?= $name ?> at the age of <?= $age ?> is studying at <?= $dept?> of <?= $city ?> Campus. </h3>
                <h3>
                    <?= $name ?> at the age of <?= $age ?> is studying at <?= $dept ?>
                </h3>
            </div>
    </body>
</html>