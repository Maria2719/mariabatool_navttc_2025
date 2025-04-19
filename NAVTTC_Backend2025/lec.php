<?php
$name = "Nobody";
$age = 35;
$dept = "NAVTTC";

echo $name." is ". $age." Years old in ". $dept;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> <?= $name ?> is <?= $age?> Years old in <?= $dept?>. </h3>
</body>
</html>