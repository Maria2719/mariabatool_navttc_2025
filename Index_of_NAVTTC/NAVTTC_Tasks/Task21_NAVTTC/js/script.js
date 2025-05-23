//Use of loop to display a string of all the names of months using JS functions and variables.

    //months name in new line  
    // function months(names) {
    //   //  return " Month " +" is "+ names;
    //   return  names;
    
    // }

    // monthString =  ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]

    // for (i=0; i <= monthString.length; i++){
    //     console.log(months(   monthString[i]  ));
    // }

    //months in a string
    let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    let monthString = "";
    
    for ( i = 0; i < months.length; i++) {
        monthString += months[i] + ", ";
    }
    
    console.log(monthString.slice(0, -2)); // Remove the extra comma and space at the end