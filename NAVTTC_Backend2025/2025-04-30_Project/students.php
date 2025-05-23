<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">

    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php 
require 'includes/navbar.php';

require 'classes/Database.php';
require 'classes/Student.php';

$conn = Database::getDB();
$students=  Student::getAll( $conn );

?>


<div class="container">
        <div class="row justify-content-around">

            <h3>List of Students</h3>
            <p class="border-3 border-bottom my-3">This page contains the data of all students that have enrolled in our software house or college!</p>
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  foreach ($students as $student): ?>
                        <tr>
                        <th scope="row"><?= $student['id']; ?></th>
                        <td><?=  $student['fname'];  ?></td>
                        <td><?= $student['lname']; ?></td>
                        <td><?=  $student['city']; ?></td>
                        </tr>
                        <?php  endforeach;?>
                      
                    </tbody>
                    </table>
                </div>
        </div>
    </div>



<?php require 'includes/footer.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>
</html>