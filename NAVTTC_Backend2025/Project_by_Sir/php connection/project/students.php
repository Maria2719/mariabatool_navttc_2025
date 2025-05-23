<?php 
require 'includes/navbar.php';
require 'classes/Database.php';
require 'classes/Student.php';


$conn = Database::getDB();

var_dump(  Student::getAll( $conn ) );

?>


    <!-- main content starts -->
    <div class="container">
        <div class="row justify-content-around">
            <h3>List of Students</h3>
            <p class="border-3 border-bottom my-3">This page contains the data of all students that have enrolled in our software house or college!</p>
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Qimra</td>
                        <td>Fatima</td>
                        <td>Hyderabad</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Erum</td>
                        <td>Aijaz</td>
                        <td>Hyderabad</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Masooma</td>
                        <td>Zehra</td>
                        <td>Hyderabad</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
        </div>
    </div>

     <!-- main content ends -->

<?php require 'includes/footer.php';?>
