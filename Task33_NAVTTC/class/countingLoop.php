<?php

//33- Write a  Program to display count, from 1 to 5 using PHP do...while loop as given below:
// 1
// 2
// 3
// 4
// 5

// Define a class for counting
class Counter {
    private $start;
    private $end;

    // Constructor to initialize start and end values
    public function __construct($start, $end) {
        $this->start = $start;
        $this->end = $end;
    }

    // Method to display numbers using do...while loop
    public function displayCount() {
        $i = $this->start;
        do {
            echo $i . "<br>";
            $i++;
        } while ($i <= $this->end);
    }
}

?>
