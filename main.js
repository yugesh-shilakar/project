const regex_un=/^[0-9,A-Z,a-z]{1,10}$/;	
function validateform() {
    var usernameElement = document.forms[0].elements[0];
    var un=usernameElement.value;
    var is_valid=regex_un.test(un);
    if(is_valid === false){
        usernameElement.classList.add("error");
        document.getElementById('message').innerHTML='Username is not valid';
    }
    else{
        usernameElement.classList.remove("error");
        document.getElementById('message').innerHTML='username is valid';
        
    }
    return false;
}