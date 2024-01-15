function validate(){
    let firstName = document.forms["myForm"]["fname"].value;
    let lastName = document.forms["myForm"]["lname"].value;
    let email = document.forms["myForm"]["email"].value;
    let mobile = document.forms["myForm"]["mobileno"].value;
    let pass = document.forms["myForm"]["password"].value;

    if (firstName == "") {
        alert("First Name must be filled out");
        return false;
    }
    else if(lastName == ""){
        alert("Last Name must be filled out");
        return false;
    }
    else if(email = "" || !(email.includes('@')) || !(email.includes('gmail.com'))){
        alert("Enter the correct Email");
        return false;
    }
    else if(isNaN(mobile) || mobile == ""){
        alert("Enter the correct Mobile Number");
        return false;
    }
    else if(pass.length < 8 || pass.length > 12){
        alert("password  length should be between 8 and 12");
        return false;
    }
    else{
        return true;
    }
}


