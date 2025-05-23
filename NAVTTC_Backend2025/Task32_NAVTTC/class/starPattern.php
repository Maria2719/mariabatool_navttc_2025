<?php


// In OOP PHP,      write a Program to create following pattern using simple while loop: ******


// Define a class to generate a star pattern
class StarPattern {
    private $rows;

    // Constructor to initialize the number of rows
    public function __construct($rows) {
        $this->rows = $rows;
    }

    // Method to generate and display the pattern using while loop
    public function generatePattern() {
        $i = 1;
        while ($i <= $this->rows) {
            $j = 1;
            while ($j <= $i) {
                echo "*";
                $j++;
            }
            echo "<br>";
            $i++;
        }
    }
}

?>
