<?php require 'includes/navbar.php';?>

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
                        <th>Course Name</th>
                        <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>CIT Web Development</td>
                        <td>NAVTTC</td>
                        <!-- <td>Hyderabad</td> -->
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Digital Marketing</td>
                        <td>NAVTTC</td>
                        <!-- <td>Hyderabad</td> -->
                        </tr>
                        <!-- <tr>
                        <th scope="row">3</th>
                        <td>Masooma</td>
                        <td>Zehra</td>
                        <td>Hyderabad</td>
                        </tr> -->
                    </tbody>
                    </table>
                </div>
        </div>
    </div>

     <!-- main content ends -->

<?php require 'includes/footer.php';?>
