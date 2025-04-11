// Exercise 5: Traffic Light
// Ask the user to enter a traffic light color (red, yellow, green).
// Use a switch statement to show the appropriate message:

// Red = "Stop"

// Yellow = "Ready"

// Green = "Go

let trafficLight= prompt("Enter a Traffic light color ( Red, Yellow, Green):")

switch(trafficLight){
    case "red":
    document.body.innerHTML="On Red light just Stop ";
        break;

    case "yellow":
        document.body.innerHTML="Yellow = Ready ";
        break;
    case "green":
        document.body.innerHTML="Green = Go ";
        break;
    default:
        document.body.innerHTML="The Traffic Light Color is invalid."
} 
