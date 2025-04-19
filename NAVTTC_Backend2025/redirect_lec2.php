<?php 
$name = "Nobody";
$age = 35;
$dept = "NAVTTC";


$userMarks = 40;

// $success = '';
// $failure = '';

$message = '';

if ( $userMarks >= 70 ){
  header("Location: index.php");
  // $success = "Passed with flying colors";
} else{
  $message = "Satisfied with failure!";
  // $failure = "Satisfied with failure!";
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


  <!-- <div class="success"> -->
   <?php /*$success*/ ?>
  <!-- </div> -->

  <!-- <div class="failure"> -->
   <?php /* $failure */ ?>
  <!-- </div> -->
  <!-- <h3> <?php /*$name*/ ?> is <?php /*$age*/ ?> years old.  </h3> -->
 </body>
</html>