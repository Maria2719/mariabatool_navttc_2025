<?php

// make class summer
// initialize variable count
// static function sum(count)
// { $count ++
// }
// return value as count
//------------------------

class Summer {
    // Static property to hold count
    private static $count = 0;

    // Static method to increment count and return factorial
    public static function sum() {
        self::$count++; // Increment the static count
        return self::factorial(self::$count); // Return factorial of updated count
    }

    // Private static helper method to calculate factorial
    private static function factorial($n) {
        if ($n <= 1) {
            return 1;
        }
        return $n * self::factorial($n - 1);
    }
}

// Example usage:
echo "Factorial: " . Summer::sum() . "<br>"; // count = 1 → factorial = 1
echo "Factorial: " . Summer::sum() . "<br>"; // count = 2 → factorial = 2
echo "Factorial: " . Summer::sum() . "<br>"; // count = 3 → factorial = 6
echo "Factorial: " . Summer::sum() . "<br>"; // count = 4 → factorial = 24

?>

?>