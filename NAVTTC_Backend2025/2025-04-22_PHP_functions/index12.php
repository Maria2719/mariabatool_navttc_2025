 <?php
// Even or Odd Number Checker

// Create a PHP program using a function that accepts a number and checks whether 
// it's even or odd. Use nested if-else to also check if the number is positive, negative, or zero.

  function check($num){
    if($num %2 ===0){
        echo "The Number is Even!  <br>" ;
    } else {
        echo "The Number is Odd!";
    }
    return;
  } 

//    function check1($num1){
  
//     if (($num > 0)){
//         echo "The Number is Positive! ";
//     } elseif (($num < 0)) {
//         echo "The Number is Negative!";
//     } elseif (($num === 0)){
//         echo "The Number is Zero!"
//      } else {
//         echo "Invalid Number";
//      }
//     return; 
// }
 check(5);
 //check1(5);


?>