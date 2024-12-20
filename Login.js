//display error message on php page
function printError(elemId, msg){
    document.getElementById(elemId).innerHTML = msg;
}
//this function will ensure that the form inputs are valid
function validateForm(){
    //these are the inputs from the html text/input elements
    var user = document.appForm.user.value;
    var psw = document.appForm.psw.value;


var user_valid = true;
var pass_valid = true;

printError("user_error", "");
printError("pass_error", "");

//Input is empty for username textbox
if (user == ""){
    printError("user_error", "Please enter your username");
    user_valid = false;
}
// Welcome User is shown below if the textbox isn't empty
else{
    user_result.innerHTML= "Welcome " + "'" + user + "'";
    user_valid = false;
}

//check to see if the user entered a valid username
if (psw == ""){
    printError("pass_error", "Please enter your password");
    pass_valid = false;
}
// Shows password below if the textbox isn't empty
else{
    pass_result.innerHTML= "Password entered: " + "'" + psw + "'" ;
    user_valid = false;
}

    //If any of the textboxes are empty
if(!user_valid || !pass_valid){
    return false;
}
else {
    return;
}
}
