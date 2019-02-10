function validate(x){
    var identifier = x.getAttribute('name');
    var value = x.value;
    validUsername = true;

    switch(identifier){
        case 'nom':

            var usernameRegex = /^[a-zA-Z]+$/;
            console.log(value);
            if (value == ""){
                validUsername = false;
            }else if (value.length > 50){
                validUsername = false;
            }else if (!usernameRegex.test(value)){
                validUsername = false;
                $(x).css('background-color', 'red');
            }

            if(!validUsername){
                alert("invalido")
            }else{
                alert("valid");
            }
            break;
        case 'correoreg':
            $(x).css('color', 'red');
            break;
        case 'passwordreg':
            $(x).css('color', 'red');
            break;
        case 'callereg':
            $(x).css('color', 'red');
            break;
        case 'poblacioreg':
            $(x).css('color', 'red');
            break;
        case 'postalreg':
            $(x).css('color', 'red');
            break;

    }

}