<?php

// Base class: Device
class Device {
    // Method to power on the device
    public function powerOn() {
        echo "The device is now powered on.<br>";
    }
}

// Derived class: Laptop extends Device
class Laptop extends Device {
    // Overriding the powerOn method
    public function powerOn() {
        echo "The laptop is booting up... Welcome!<br>";
    }
}

// Instantiate Device object
$genericDevice = new Device();
$genericDevice->powerOn(); // Outputs: The device is now powered on.

// Instantiate Laptop object
$laptop = new Laptop();
$laptop->powerOn(); // Outputs: The laptop is booting up... Welcome!

?>
