//19 Use If...else statement of JavaScript to write a code to Display “Good Morning” 
//or “Good Afternoon” according to current Time.

let currentTime = new Date().getHours();

if (currentTime < 12) {
 
    document.body.innerHTML="Good Morning"
    console.log("Good Morning");
} else {

    document.body.innerHTML="Good Afternoon"

    console.log("Good Afternoon");
}
