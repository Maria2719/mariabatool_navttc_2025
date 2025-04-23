<?php

$candidates = [
    [ "name" => "Khola",  "fn" =>  "Durrab", "DOB" =>  "15/4/2023" , "cnic" => "41305-6837339-4",  "details" =>  "Student of Institute of Information Technology(I-T)  at The University of Sindh, Jamshoro."] , 
    [ "name" =>  "Fatima" , "fn" => "yousuf",  "DOB" => "2/1/2011" , "cnic" =>  "41305-6455238-4" ,  "details" =>  "Student of Institute of Computer Science(C-S)  at The University of Sindh,Jamshoro."] ,
    [ "name" => "Zubi" , "fn" =>  "Khan",  "DOB" => "5/2/2009",  "cnic" => "41305-6837437-4",  "details" =>  "Student of Institute of Software Develipment D(S-D)  at The University of Sindh,Jamshoro."] ,
    [ "name" => "Khola",  "fn" =>  "Durrab", "DOB" =>  "15/4/2023" , "cnic" => "41305-6837339-4",  "details" =>  "Student of Institute of Information Technology(I-T)  at The University of Sindh, Jamshoro."] , 
    [ "name" =>  "Fatima" , "fn" => "yousuf",  "DOB" => "2/1/2011" , "cnic" =>  "41305-6455238-4" ,  "details" =>  "Student of Institute of Computer Science(C-S)  at The University of Sindh,Jamshoro."] ,
    [ "name" => "Zubi" , "fn" =>  "Khan",  "DOB" => "5/2/2009",  "cnic" => "41305-6837437-4",  "details" =>  "Student of Institute of Software Develipment D(S-D)  at The University of Sindh,Jamshoro."] ,
    [ "name" =>  "Fatima" , "fn" => "yousuf",  "DOB" => "2/1/2011" , "cnic" =>  "41305-6455238-4" ,  "details" =>  "Student of Institute of Computer Science(C-S)  at The University of Sindh,Jamshoro."] ,
    [ "name" => "Zubi" , "fn" =>  "Khan",  "DOB" => "5/2/2009",  "cnic" => "41305-6837437-4",  "details" =>  "Student of Institute of Software Develipment D(S-D)  at The University of Sindh,Jamshoro."] 
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new_array_loop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
 
</head>
<body>
    
<div class="container">
  <div class="row my-5 justify-content-between">
    <?php foreach($candidates as $candidate): ?>
     <div class="col-md-3 my-3">
       <div class="card  p-3 border border-danger">
         <div class="card-title">
          <h3 class="text-secondry"><?= $candidate['name'] ?> </h3>
          </div>
         <div class="body">
           <h5> Father's name:  <?= $candidate['fn'] ?>  </h5>
           <h5>Date of Birth:  <?= $candidate['DOB'] ?>  </h5>
           <h5> CNIC Number:<span class="btn btn-dark px-5" >  <?= $candidate['cnic'] ?> </span> </h5>
           <h5>Student Details:</h5>
           <p><b>  <?= $candidate['details'] ?> </b> </p>
           
    </div>
        </div>
       </div>
     <?php endforeach; ?> 
     </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>

