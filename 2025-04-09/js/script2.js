
// Check if a password entered matches the correct password.


let password = prompt("Enter a password");
let correctpw= "12345"

if (password==correctpw)
{
    document.body.innerHTML="Password Matched"
}

else 
document.body.innerHTML="Password is invalid"