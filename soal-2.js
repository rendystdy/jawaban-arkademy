function validateForm(username,password){
    var validUsername = /^[a-z_]{8}$/g;
    var validPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8}$/g;
    
    return (validUsername.test(username) && validPassword.test(password));

}

console.log(validateForm('soetami_','sw1p3^UP'));