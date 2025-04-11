

// Exercise 4: Compare Two Numbers
// Ask the user to enter two numbers.
// Use if-else to determine which number is greater, or if they are equal.

let num1= Number(prompt("Enter any Number!"))
let num2= Number(prompt("Enter any Number!"))

if(num1>num2){
document.body.innerHTML= "Number "+num1+ " is greater than "+num2;
} else if (num1===num2){
    document.body.innerHTML= "Number "+num1+ " is equal to  "+num2;
}else if(num1<num2){

    document.body.innerHTML= "Number "+num1+ " is less than "+num2;
}

