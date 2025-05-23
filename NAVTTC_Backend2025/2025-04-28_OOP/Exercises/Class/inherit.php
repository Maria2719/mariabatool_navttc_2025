<?php

class Animal {
    // Property of the parent class
    public $name;

    // Constructor of the parent class
    public function __construct($name) {
        $this->name = $name;
    }

    // Method of the parent class
    public function speak() {
        echo $this->name . " makes a sound.\n";
    }
}

class Panda extends Animal {
    public function speak() {
        parent::speak();  // Call the parent class's speak method
        echo $this->name . " bleats.\n";  // Additional behavior in the child class
    }
}
class Elephant extends Animal {
        public function sound() {
           parent::sound();
           echo $this->name. "traumpets. \n;"
        }
}



?>