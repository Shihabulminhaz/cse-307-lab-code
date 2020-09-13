function validateForm() {
    //Name valid
    if(isName(document.forms["myFrom"]["name"].value)==false) return false;

    //birth valid
    if(isValidBirthDate(document.forms["myFrom"]["birthDate"].value)==false) return false;

    //gender valid
    if(isValidGender(document.forms["myFrom"]["gender"].value)==false) return false;

    //father valid
    if(isFName(document.forms["myFrom"]["father"].value,"'Your Father's name'")==false) return false;

    //mother valid
    if(isMName(document.forms["myFrom"]["mother"].value,"'Your Mother's name'")==false) return false;

    //email valid
    if(isValidEmail(document.forms["myFrom"]["email"].value)==false) return false;

    //phone number valid
    if(isCorrectPhoneNumber(document.forms["myFrom"]["phoneNumber"].value)==false) return false;

    //Institution valid
    if(isUName(document.forms["myFrom"]["institution"].value,"'Your Institution Name'")==false) return false;

    //roll valid
    if(isRollValid(document.forms["myFrom"]["roll"].value)==false) return false;

    return true;
}


function isName(name){
    var len = name.length;  // check length
    var cnt=0;
    var flag = false;
    if(len==0){
        alert("You need to insert Name");
        return false;
    }
    for(var i=0;i<len;i++){
        if((name[i]>='A' && name[i]<='Z') ||  (name[i]>='a' && name[i]<='z')){
            flag = true ; 
        }
        else if(name[i]==' '){
            cnt++; 
        }
        else if(name[i]=='.'){
            if(flag) flag = false;
            else{
                alert("extra dot use is not valid");
                return false;
            }
        }
        else
        {
            //any type of worng
            alert(name[i]+" is not a valid character in "+name);
            return false;
        }
    }
    if(cnt==len){
        alert("You must fill name with valid character");
        return false;
    }
}

function isValidBirthDate(birthDate){
    if(birthDate=="") 
    {
        alert("You must insert your birth date");
        return false;
    }
    var bDate = Number(birthDate.slice(8,10)), bMonth  = Number(birthDate.slice(5,7)), bYear = Number(birthDate.slice(0,4));

    var current_time = new Date();
    var cDate = current_time.getDate(), cMonth = current_time.getMonth() + 1, cYear = current_time.getFullYear();
    
    //check birthDate is future
    if(bYear>cYear || (bYear==cYear && bMonth>cMonth) || (bYear==cYear && bMonth==cMonth && bDate>cDate)){
        alert("Hey, you type future time in your birthday section");
        return false;
    }
    
    //minimum 17 years need
    if(bYear>cYear-17 || (bYear==cYear-17 && bMonth>cMonth) || (bYear==cYear-17 && bMonth==cMonth && bDate>cDate)){
        alert("You are less than 17 years old.");
        return false;
    }
    
    //maximum 200 years
    if(bYear<cYear-200 || (bYear==cYear-200 && bMonth<cMonth) || (bYear==cYear-200 && bMonth==cMonth && bDate<cDate)){
        alert("More than 200 years old is not acceptable");
        return false;
    }
    return true;
}

function isValidGender(gender){
    if(gender!="Male" && gender!="Female" && gender!="Other"){
        alert("You Must inset Your gender");
        return false;
    }
    return true;
}

function isFName(name){
    var len = name.length;  // check length
    var cnt=0;
    var flag = false;
    if(len==0){
        alert("You need to insert Name");
        return false;
    }
    for(var i=0;i<len;i++){
        if((name[i]>='A' && name[i]<='Z') ||  (name[i]>='a' && name[i]<='z')){
            flag = true ; 
        }
        else if(name[i]==' '){
            cnt++; 
        }
        else if(name[i]=='.'){
            if(flag) flag = false;
            else{
                alert("Father's name extra dot use is not valid");
                return false;
            }
        }
        else
        {
            //any type of worng
            alert(name[i]+" is not a valid character in "+name);
            return false;
        }
    }
    if(cnt==len){
        alert("You must fill name with valid character");
        return false;
    }
}

function isMName(name){
    var len = name.length;  // check length
    var cnt=0;
    var flag = false;
    if(len==0){
        alert("You need to insert Name");
        return false;
    }
    for(var i=0;i<len;i++){
        if((name[i]>='A' && name[i]<='Z') ||  (name[i]>='a' && name[i]<='z')){
            flag = true ; 
        }
        else if(name[i]==' '){
            cnt++; 
        }
        else if(name[i]=='.'){
            if(flag) flag = false;
            else{
                alert("Mother's name extra dot use is not valid");
                return false;
            }
        }
        else
        {
            //any type of worng
            alert(name[i]+" is not a valid character in "+name);
            return false;
        }
    }
    if(cnt==len){
        alert("You must fill name with valid character");
        return false;
    }
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

function isCorrectPhoneNumber(phoneNumber){
    var len = phoneNumber.length;
    var i = 0;
    if(len==0){
        alert("You Must include your phone number");
        return false;
    }
    if(len!=11) {
        alert("Incorrect Number of digit of Your Phone number");
        return false;
    }
    
    if(phoneNumber[0]!='0' || phoneNumber[1]!='1'){
        alert("You must start by 01 of your Phone Number");
        return false;
    }
    
    while(i<len){
        if(0<=phoneNumber[i] && phoneNumber[i]<=9){
            i++;
            continue;
        }
        else{
            alert("Invalid Phone Number, all character must be digit.");
            return false;
        }
    }
    return true;
}

function isUName(name){
    var len = name.length;  // check length
    var cnt=0;
    var flag = false;
    if(len==0){
        alert("You need to insert Name");
        return false;
    }
    for(var i=0;i<len;i++){
        if((name[i]>='A' && name[i]<='Z') ||  (name[i]>='a' && name[i]<='z')){
            flag = true ; 
        }
        else if(name[i]==' '){
            cnt++; 
        }
        else if(name[i]=='.'){
            if(flag) flag = false;
            else{
                alert("extra dot use is not valid");
                return false;
            }
        }
        else
        {
            //any type of worng
            alert(name[i]+" is not a valid character in "+name);
            return false;
        }
    }
    if(cnt==len){
        alert("You must fill name with valid character");
        return false;
    }
}

function isRollValid(roll){
    if(roll>=10000000 && roll<=99999999){  // check roll 
        return true;
    }
    else{
        alert("Your must input your valid roll number");
        return false;
    }
}