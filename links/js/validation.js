function validate(){
    var username=document.getElementById("uname").value;
    var password=document.getElementById("pass").value;
    var email=document.getElementById("email").value;
    
    var emailreg=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._]+\.[a-zA-Z]{2,6}$/
    if(username !="" && email != "" && password !=""){
        if(email.match(emailreg)){
            alert("success");
            return true;
        } else{
            alert("invalid email address");
            return false;
        }
        
    }
    else{
        alert("fields should not be empty");
        return false;
    }
}