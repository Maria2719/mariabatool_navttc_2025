//Use the switch statement to display “today is (whatever day it is)” according to the current day.


let currentDay = new Date().getDay();

switch (currentDay) {
    case 0:
        console.log("Today is Sunday");
        document.body.innerHTML="Today is Sunday."
        break;
    case 1:
        console.log("Today is Monday");
        document.body.innerHTML="Today is Monday."
        break;
    case 2:
        console.log("Today is Tuesday");
        document.body.innerHTML="Today is Tuesday."
        break;
    case 3:
        console.log("Today is Wednesday");
        document.body.innerHTML="Today is Wednesday."
        break;
    case 4:
        console.log("Today is Thursday");
        document.body.innerHTML="Today is Thursday."
        break;
    case 5:
        console.log("Today is Thursday");
        document.body.innerHTML="Today is Friday."
        break;
    case 6:
        console.log("Today is Saturday");
        document.body.innerHTML="Today is Saturday."
        break;
}