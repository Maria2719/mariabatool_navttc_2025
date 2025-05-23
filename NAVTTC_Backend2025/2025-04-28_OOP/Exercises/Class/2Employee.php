<?php

// Create a class named Employee.
// Add:
// a public property $name
// a protected property $position
// a private property $salary
// Create a public method setDetails() to set all three properties.
// Create a public method getSalary() to return the salary.
// Create an object and set details, then print the employee name and salary.

class Employee
{
public $name;
Protected $position;
private $salary;

public function setDeatails(){

    echo  $this->name. $this->position. $this->salary;
     
}

public function getSalary(){

}
return $this->salary;
}


?>