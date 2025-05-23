<!-- Login Authentication System

Create a PHP program with a function that accepts a username and password.
 Use nested if-else to check if the username and password match predefined 
 values and display login success or failure message. --> 


 <?php
$usern = "Maria";
$userenteredpass = "Khansa";
$check = " ";
    
    function input($un,$pw){
       
       
        echo "UserName is ". $un;
         echo "Password is ". $pw;
         
         return;
    }
        input(2,4);

    if ($un == $usern) {
        header("location:index.php") ;
    } else   {
        $check = "Are bhai PassWord Match Nahi ho raha!!";
    } 


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