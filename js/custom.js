//blocking the back button not to anything after logout

    function preback(){window.history.forward();}
    setTimeout("preback ()",0);
    window.onunload=function(){null};
   

//validation in the registration form

//GETTING ALL INPUTS TEXT OBJECTS
var username = document.forms["vform"]["username"];
var email = document.forms["vform"]["email"];
var phone No = document.forms["vform"]["phone No"];
var password = document.forms["vform"]["password"];

//GETTTING ALL ERROR DISPLAY OBJECTS
var username_error = document.getElementById("username_error");
var email_error = document.getElementById("email_error");
var phone No_error = document.getElementById("phone No_error");
var password_error = document.getElementById("pass_error");

//SETTING ALL EVENT LISTENERS
username.addEventListener("blur", nameVerify, true);
email.addEventListener("blur", nameVerify, true);
phone No.addEventListener("blur", nameVerify, true);
password.addEventListener("blur", nameVerify, true);

//VALIDATION FUNCTION
function Validate(){
//    username validation
    if(username.value ==""){
        username.style.border = "1px solid #fcc427";
        name_error.textContent = "username is required";
        username.focus();
        return false;
    }
    
//    email validation
    if(email.value ==""){
        email.style.border = "1px solid #fcc427";
        email_error.textContent = "username is required";
        email.focus();
        return false;
    }
    
    //    phone validation
    if(phone No.value ==""){
        phone No.style.border = "1px solid #fcc427";
        phone No_error.textContent = "username is required";
        phone No.focus();
        return false;
    }
    
     //   password validation
    if(password.value ==""){
        password.style.border = "1px solid #fcc427";
        password_error.textContent = "username is required";
        password.focus();
        return false;
    }
}

//event handler functions

function nameverify(){
     if (username.value !=""){
         username.style.border = "1px solid #efefef";
         username_error.innerHTML = "";
         return true;
     }
}

function emailverify(){
     if (email.value !=""){
         email.style.border = "1px solid #efefef";
         email_error.innerHTML = "";
         return true;
     }
}

function phone Noverify(){
     if (phone No.value !=""){
         phone No.style.border = "1px solid #efefef";
         phone No_error.innerHTML = "";
         return true;
     }
}

function password verify(){
     if (password.value !=""){
         password.style.border = "1px solid #efefef";
         password_error.innerHTML = "";
         return true;
     }
}