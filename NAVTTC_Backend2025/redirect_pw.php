<?php
$dbpassword1 = "Maria";
$userenteredpass = "Khansa";
$check = " ";
    
echo ("Create two variables: $dbpassword1 and $userenteredpass If the value
entered in both variables matches then redirect to index.php file 
else show in a red box that *Passwords MisMatched  *");

    if ($dbpassword1 == $userenteredpass) {
        header("location:index.php") ;
    } else   {
        $check = "Are bhai PassWord Match Nahi ho raha!!";
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Important    </title>

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
    <br>
    <br>

<?php if ( $check != '' ){
     echo "<div class='failure'>". $check  ."</div>";
     }
   ?>

</body>
</html>