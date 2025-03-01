function validateForm(){
    var Name = document.getElementById("Name").value;
    var Email = document.getElementById("Email").value;
    var Password = document.getElementById("Password").value;
    var ConfirmPassword = document.getElementById("ConfirmPassword").value;
    var error_message = document.getElementById("error-message");

    if (Name.trim() === ""){
        error_message.textContent = "masaxsana formkaagu";
        return false;
    }

    var EmailPattern = /^[a-zA-Z0-9.%+-]+@[-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!EmailPattern.test(Email)){
        error_message.textContent = "Please enter a valid email addres";
        return false;
    }

    if (Password.length < 6){
        error_message.textContent = "passworkaagu wuu ka yaryahay 6xaraf";
        return false;
    }

    if (Password !== ConfirmPassword){
        error_message.textContent = "passworkaagu maaha mid isku mida";
        return false;
    }

    error_message.textContent = "";
    return true;
}