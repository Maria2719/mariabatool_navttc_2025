// Exercise 4: Fruit Price
// Ask the user to enter the name of a fruit (apple, banana, mango, etc.).
// Use a switch statement to display the price of that fruit.

let fruitName= prompt("Enter any Fruit Name (Apple, Banana, Mango, Kiwi, Strawberry):")

switch(fruitName){
    case "apple":
    document.body.innerHTML="The price of Apple  is 280/Kg. ";
        break;

    case "banana":
        document.body.innerHTML="The price of Banana is 150/ dezen.  ";
        break;
    case "mango":
        document.body.innerHTML="The price of Mango is 300/Kg. ";
        break;
    case "kiwi":
        document.body.innerHTML="The price of Kiwi is 350/Kg. ";
         break;
    case "strawberry":
        document.body.innerHTML="The price of Strawberry is 500/Kg. ";
        break;
    default:
        document.body.innerHTML="The fruit is out of stock."
} 
