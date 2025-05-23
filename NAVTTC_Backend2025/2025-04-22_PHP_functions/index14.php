<!--  Voting Eligibility Checker

Write a PHP function that checks if a person is eligible to vote.
 Ask for age and nationality. Use nested if-else to verify if age
  is 18 or above and nationality is "Pakistani".

<?php
function election($age){
    
    $age = 17;
    if ( $age >= 18){
         echo "You are eligible for vote casting process.<br> ";
    } elseif (( $age < 18)) {
        echo "not eligible! ";
    }     
    else {
        echo "Invalid age";
    }
    return;
}
    echo election(20);
 
?>    
