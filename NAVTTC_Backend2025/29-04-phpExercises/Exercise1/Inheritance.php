<?php

// Base class: Person
class Person {
    // Property
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to say hello
    public function sayHello() {
        echo "Hello, my name is {$this->name}.<br>";
    }
}

// Derived class: Teacher (inherits from Person)
class Teacher extends Person {
    // Additional property
    private $subject;

    // Constructor
    public function __construct($name, $subject) {
        parent::__construct($name); // Call parent constructor
        $this->subject = $subject;
    }

    // Method to display subject
    public function teachSubject() {
        echo "I teach {$this->subject}.<br>";
    }
}

// Instantiate a Teacher object
$teacher = new Teacher("Ma'am Maria", "OOP");

// Call methods
$teacher->sayHello();       // Inherited from Person
$teacher->teachSubject();   // Specific to Teacher

?>
