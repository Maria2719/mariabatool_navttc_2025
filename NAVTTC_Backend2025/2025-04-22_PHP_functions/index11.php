<?php

/*Student Grading Program

Write a PHP program with functions to input 5 subject marks, calculate the total 
and average, and assign a grade using nested if-else. Use separate functions for validation,
 total calculation, average, and grade assignment. */

 function grade($num1,$num2,$num3,$num4,$num5){
     $total = $num1 + $num2 +$num3 + $num4 + $num5 ;
     echo "The Total Marks are: ".$num1 + $num2 +$num3 + $num4 + $num5. "<br>"  ;
//  }
    
// function average($avg){
    $avrg = $total/5;
    echo "The average value of Marks is: ". $avrg. " <br>";
    

// function grade($total){
    
    if ( $total <= 70){
         echo "You obtained Grade C ";
    } elseif (( $total <= 80)) {
        echo "You obtained Grade B ";
    } elseif (( $total <= 90)) {
        echo "You obtained Grade A ";
    } elseif (( $total <= 100)) {
        echo "Congrates!!  You obtained Grade A+ ";
    }     
    else {
        echo " Fail";
    }
    return;
}

 
    echo grade(10,20,30,20,20);
   // echo average($avrg);
    

?>