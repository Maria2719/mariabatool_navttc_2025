 <?php
/*
$cnic = [
["Khansa","Sharjeel","DoB","41305-6837339-4"],
["Ali","yousuf","DoB","41305-6455238-4"],
["Zainab","Khan","DoB","41305-6837437-4"]
]
var_dump($cnic); -->
*/

$students = [ 
    [ "name" => "Khansa",  "fn" =>  "Sharjeel", "DOB" =>  "15/4/2023" , "cnic" => "41305-6837339-4",  "details" =>  "Student of Institute of Information Technology(I-T)  at University of Sindh"] , 
    [ "name" =>  "Ali" , "fn" => "yousuf",  "DOB" => "2/1/2011" , "cnic" =>  "41305-6455238-4" ,  "details" =>  "Student of Institute of Computer Science(C-S)  at University of Sindh"] ,
    [ "name" => "Zainab" , "fn" =>  "Khan",  "DOB" => "5/2/2009",  "cnic" => "41305-6837437-4",  "details" =>  "Student of Institute of Software Develipment D(S-D)  at University of Sindh"] 
   ];
   ?>   


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Associative Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
     <div class="row my-5 justify-content-between">
      <?php foreach ( $students as $student ) : ?> 
        <div class="col-md-3">
            <div class="card border border-danger">
              
              <div class="card-title">
                <h3 class="text-danger"><?= $student['name'] ?> </h3>
              </div>

              <div class="body">
                <h5>Father name: <span> <?= $student['fn'] ?> </span> </h5>
                <h5>Date of Birth: <?= $student['DOB'] ?> </h5>
                <p><b><i>Student Details: <?= $student['details'] ?> <i><b></p>
        
                <h5>CNIC Number: <span class="btn btn-dark" > <?= $student['cnic'] ?> </span> </h5>
              
              </div>
            
            </div>
        </div>
      <?php endforeach; ?> 
     </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
