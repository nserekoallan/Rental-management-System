/*Function to verify that both passwords are the same*/

function check_password()
{
    var pass1 = document.getElementById("password1");
    var pass2 = document.getElementById("password2");

    if(pass1.value == " "){
        alert("Password cannot be blank");

        return false;
    }

    if(pass1.value !== pass2.value){
        alert("The two passwords are not the same. Please enter the password again.");
    }  

   
}


