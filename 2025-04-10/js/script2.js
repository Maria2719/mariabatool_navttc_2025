// Exercise 2: Calculator
// Ask the user to enter two numbers and an operator (+, -, *, /).
// Use a switch statement to perform the operation and display the result.

    let num1=Number(prompt("Enter the first number:"))
    let operator=prompt("Enter an Operator(+, -, *, /):")
    let num2=Number(prompt("Enter second number:"))

switch(operator){

        case "+":

        document.body.innerHTML= Number(num1+num2);
        break
        case "-":

        document.body.innerHTML= Number(num1-num2);
        break

        case "*":

        document.body.innerHTML= Number(num1*num2);
        break

        case "/":

        document.body.innerHTML= Number(num1/num2);
        break
        default:
            document.body.innerHTML="Invalid Operation!"
}
