<?php 2. Create two numeric variables: $num1 = 15, $num2 = 5.
/*  2. Calculate and display:
// Sum, Difference, Product, Quotient
// Show the output in HTML using <p> tags. 
 */

$num1 = 8;
$num2 = 2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Calculator</title>
</head>
<body>
<h1>Task 2</h1>

<h2>Calculator</h2>

 <p>The Sum of Numbers are  <?= $num1 + $num2; ?></p>
 <p>The Difference of Numbers are <?= $num1 - $num2; ?> </p>
 <p>The Product of Numbers are <?= $num1 * $num2; ?> </p>
 <p>The Quotient of Numbers are <?= $num1 / $num2; ?> </p>
 
 
</body>
</html>