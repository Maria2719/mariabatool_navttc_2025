
<?php

// Parent class: Vehicle
class Vehicle {
    // Property
    public $type;

    // Constructor to initialize type
    public function __construct($type) {
        $this->type = $type;
    }

    // Method to display vehicle type
    public function showType() {
        echo "This is a {$this->type}.<br>";
    }
}

// Child class: Truck extends Vehicle
class Truck extends Vehicle {
    // Method specific to Truck
    public function loadGoods() {
        echo "Goods loaded in Truck.<br>";
    }
}

// Create an object of Truck
$myTruck = new Truck("Truck");

// Call inherited method
$myTruck->showType();     // Output: This is a Truck.

// Call Truck's own method
$myTruck->loadGoods();    // Output: Goods loaded in Truck.

?>
