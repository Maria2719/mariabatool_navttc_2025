
//6- Create a function that take 3 arguments num1, num2 and operator ,
// if the operator is + then it shows result of adding two variables and
// if the operator is * then it shows result of multiplication of two numbers



let num1=Number(prompt("Enter the first number:"))
let operator=prompt("Enter an Operator(+ , *):")
let num2=Number(prompt("Enter second number:"))

if  ( operator === "+" ){

function addNumber(){
    
return num1+num2;
}
document.body.innerHTML =  addNumber();

} else {
    document.body.innerHTML =  num1*num2;
    

}