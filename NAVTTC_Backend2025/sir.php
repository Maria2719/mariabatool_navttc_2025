<?php 

$name = "Engr Abrar Hussain";

$fruits = [  'Apple' , 'Banana' ];

$num1 = 8;
$num = 2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>My Name is <?= $name; ?> </h1>
 <hr>
 <h3>Results</h3>

 <p>The Sum of two is  <?= $num1 + $num; ?></p>
 <p>The Subtraction of two is <?= $num1 - $num; ?> </p>
 <p>The Multiplication of two is <?= $num1 * $num; ?> </p>
 <p>The Division of two is <?= $num1 / $num; ?> </p>
 
</body>
</html>