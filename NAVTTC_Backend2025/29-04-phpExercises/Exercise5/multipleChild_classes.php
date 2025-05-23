<?php

//Create a Shape class with a method getArea() that returns 0. Then create two child classes: Rectangle and Circle. Each should override getArea() and compute the area based on their respective formulas.


// Base class: Shape
class Shape {
    // Method to get area (default implementation)
    public function getArea() {
        return 0;
    }
}

// Child class: Rectangle
class Rectangle extends Shape {
    private $width;
    private $height;

    // Constructor to initialize width and height
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Override getArea method
    public function getArea() {
        return $this->width * $this->height;
    }
}

// Child class: Circle
class Circle extends Shape {
    private $radius;

    // Constructor to initialize radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Override getArea method
    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Create objects
$rectangle = new Rectangle(5, 10);
echo "Rectangle Area: " . $rectangle->getArea() . "<br>"; // Output: 50

$circle = new Circle(7);
echo "Circle Area: " . $circle->getArea(); // Output: Approx. 153.94


// Shape is the base class with a default getArea() returning 0.

// Rectangle and Circle override getArea() to provide specific area calculations.

// Demonstrates polymorphism via method overriding.

?>
