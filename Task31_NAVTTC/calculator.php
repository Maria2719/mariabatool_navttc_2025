<?php

require 'class/factorial.php';

$number = 5; 
$calculator = new FactorialCalculator($number);
$result = $calculator->calculateFactorial();

echo "The factorial of $number is: $result";


?>