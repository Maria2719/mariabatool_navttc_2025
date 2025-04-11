// FOR SWITCH STATEMENTS
// Exercise 1: Day of the Week
// Ask the user to enter a number from 1 to 7.
// Use a switch statement to display the corresponding day of the week (e.g., 1 = Sunday, 2 = Monday, etc.).

    let dayNumber= prompt("Enter any of the number between 1 to 7 to know about which day it is:") 

        switch(dayNumber){
            case "1":
                 document.body.innerHTML="1st day of week is Sunday."
                 break
            case "2":
                 document.body.innerHTML="2nd day of week is Monday."
                 break
            case "3":
                 document.body.innerHTML="3rd day of week is Tuesday."
                 break
            case "4":
                 document.body.innerHTML="4th day of week is Wednesday."
                 break
            case "5":
                 document.body.innerHTML="5th day of week is Thursday."
                 break
            case "6":
                 document.body.innerHTML="6th day of week is Friday."
                 break
            case "7":
                 document.body.innerHTML="7th day of week is Saturday."
                 break
             default:
                 document.body.innerHTML=" You press invalid day number"                                


        }
