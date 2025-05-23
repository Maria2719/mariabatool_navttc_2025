<?php
// Define a class
class Car {
    // Property (variable) of the class
    public $model;
    public $color;

    // Constructor to initialize the properties
    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }

    // Member function to display car details
    public function displayDetails() {
        echo "Car Model: " . $this->model . "\n";
        echo "Car Color: " . $this->color . "\n";
    }
}


?>