<?php
// Simple Calculator Program

// Develop a PHP program that uses a function to perform a basic calculator. 
//Take two numbers and an operator (+, -, *, /) as input. Use nested if-else
 //within the function to perform the correct operation.


    function addNumbers($num1,$num2){
       return "The Sum is ".$num1 + $num2."<br>";
        }
 
    function substractNumbers($num01,$num02){
        return "The Difference is ".$num01 - $num02."<br>";
        }
        
        
    function multiplyNumbers($num11,$num12){
       return "The Product is ".$num11 * $num12."<br>";
            }
            
     function devideNumbers($num21,$num22){
       return "The Qutient is ".$num21 / $num22 ."<br>";
                }
                
            
    echo addNumbers(10,7);
    echo substractNumbers(4,2);

    echo multiplyNumbers(6,5);
    echo  devideNumbers(16,4);
    

?>