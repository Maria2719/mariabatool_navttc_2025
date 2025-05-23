
<?php
//Create a User class with a method getRole() that returns "User". Create an Admin class that extends User and overrides the getRole() method but still calls the parent method using parent::getRole() and appends " & Admin".


// Parent class: User
class User {
    // Method that returns the user's role
    public function getRole() {
        return "User";
    }
}

// Child class: Admin extends User
class Admin extends User {
    // Overriding getRole() and calling parent method
    public function getRole() {
        return parent::getRole() . " & Admin";
    }
}

// Create User object
$user = new User();
echo $user->getRole() . "<br>";  // Output: User

// Create Admin object
$admin = new Admin();
echo $admin->getRole();          // Output: User & Admin

?>
