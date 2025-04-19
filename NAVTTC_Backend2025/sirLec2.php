<?php 
$name = "Nobody";
$age = 35;
$dept = "NAVTTC";

// echo $name." is ".$age." years old"


//  
// 

$userMarks = 80;

$message = '';

if ( $userMarks >= 70 ){
  // header("Location: index.php");
} else{
  $message = "Satisfied with failure!";
}

?>
<html>
 <head>
  <style>
   .success , .failure {
    text-align: center;
   }
   .success  {
    color: 'green';
    border: 2px solid green;
   }

   .failure {
    color : 'red';
    border: 2px solid red;
   }
  </style>

 </head>
 <body>
  
   <?php if ( $message != '' ){
     echo "<div class='failure'>". $message  ."</div>";
   }
   ?>

 </body>
</html>