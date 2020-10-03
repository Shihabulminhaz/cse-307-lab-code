function validCreateAccount(){
    var username = document.forms["myForm"]["username"].value;
    var email = document.forms["myForm"]["email"].value;

    if(!isValidUserName(username)) return false;
    if(!isValidEmail(email)) return false;
    
    return true;
}

function validlogin(username){
    var username = document.forms["myForm"]["username"].value;
    console.log(username);
    for(var i=0; i < username.length; i++) {
        if(username[i]==' '){ 
            alert("Space is not alowed in the username section"); 
            return false;
        }
    }
    return true;
}

function isValidEmail(email){
    var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z])+\.([A-Za-z]{2,4})$/;
    if (mailformat.test(email)==true){
        return true;
    }
    else{
        alert("You type invalid email");
        return false;
    }
}