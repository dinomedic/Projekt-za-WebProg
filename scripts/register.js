function provjeraRegister(){
    var a=document.getElementById("Fname").value;
    var b=document.getElementById("Lname").value;
    var c=document.getElementById("Email").value;
    var d=document.getElementById("Password").value;
    var e=document.getElementById("Passwordrepeat").value;

    
    
    if(!a||!b||!c||!d||!e){
        alert("Please enter values in all required fields!");
        return false;
    }
    }
    