// Exercise 2: Calculator
// Ask the user to enter two numbers and an operator (+, -, *, /).
// Use a switch statement to perform the operation and display the result.

    let num1=prompt("Enter the first number:")
    let operator=prompt("Enter an Operator(+, -, *, /):")
    let num2=prompt("Enter second number:")

switch(operator){

        case "+":

        document.body.innerHTML= num1+num2==(num1+num2);
        break
        case "-":

        document.body.innerHTML= num1-num2==(num1-num2);
        break

        case "*":

        document.body.innerHTML= num1*num2==(num1*num2);
        break

        case "+":

        document.body.innerHTML= num1/num2==(num1/num2);
        break
        default:
            document.body.innerHTML="Invalid Operation!"
}

// let num1 = parseFloat(prompt("Enter the first number:"));
// let operator = prompt("Enter an operator (+, -, *, /):");
// let num2 = parseFloat(prompt("Enter the second number:"));

// switch (operator) {
//     case "+":
//         console.log(`${num1} + ${num2} = ${num1 + num2}`);
//         break;
//     case "-":
//         console.log(`${num1} - ${num2} = ${num1 - num2}`);
//         break;
//     case "*":
//         console.log(`${num1} * ${num2} = ${num1 * num2}`);
//         break;
//     case "/":
//         if (num2 !== 0) {
//             console.log(`${num1} / ${num2} = ${num1 / num2}`);
//         } else {
//             console.log("Error: Division by zero is not allowed.");
//         }
//         break;
//     default:
//         console.log("Invalid operator. Please enter +, -, *, or /.");
// }

