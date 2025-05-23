<?php
// write a simple OOP PHP program, Write a program to calculate factorial of a number using for
// loop in PHP.


// Define a class for factorial calculation
class FactorialCalculator {
    private $number;

    // Constructor to initialize the number
    public function __construct($number) {
        $this->number = $number;
    }

    // Method to calculate factorial using a for loop
    public function calculateFactorial() {
        $factorial = 1;
        for ($i = 1; $i <= $this->number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

?>
