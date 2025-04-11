//  Grade Comments
// Ask the user to enter a letter grade (A, B, C, D, F).
// Use a switch statement to show a comment:

// A = "Excellent"

// B = "Very Good"

// C = "Good"

// D = "Needs Improvement"

// F = "Fail"

    let grade= prompt("Enter a Grade Letter any of (A, B, C, D, F):")

switch(grade.toUpperCase()){
    case "A":
    document.body.innerHTML="Excellent";
        break;

    case "B":
        document.body.innerHTML="Very Good";
        break;
    case "C":
        document.body.innerHTML="Good";
        break;
    case "D":
        document.body.innerHTML="Needs improvement";
         break;
    case "F":
        document.body.innerHTML="Fail";
        break;
    default:
        document.body.innerHTML="Invalid grade. Plz  Enter any of A, B, C, D, F."
} 
