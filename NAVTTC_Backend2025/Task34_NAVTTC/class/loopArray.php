<?php
//You need to write a program in PHP using for...each loop to remove specific elements by value from an array using PHP program.
// Hint:
// ●	Take an array with list of month names.
// ●	Take a variable with the name of value to be deleted

// Define a class to handle array operations
class MonthHandler {
    private $months;

    // Constructor to initialize the months array
    public function __construct($months) {
        $this->months = $months;
    }

    // Method to remove a month by value
    public function removeMonth($monthToRemove) {
        $result = [];

        // Loop through the months and add only those not matching the one to remove
        foreach ($this->months as $month) {
            if ($month !== $monthToRemove) {
                $result[] = $month;
            }
        }

        // Update the internal array
        $this->months = $result;
    }

    // Method to display the current months array
    public function displayMonths() {
        foreach ($this->months as $month) {
            echo $month . "<br>";
        }
    }
}

?>
