//bảng đky nhap
//
// Look at console
$(document).ready(function() {
    var loginUsername;
    var loginPassword;
    var account = [loginUsername, loginPassword];
  
    $('#login-button').on('click', function() {
        var loginUsernameEntry = $("#login-username").val();
        var loginPasswordEntry = $("#login-password").val();
        if (loginUsernameEntry == account[0] && loginPasswordEntry == account[1]) {
            console.log("Current Username " + account[0]);
            console.log("Current Password " + account[1]);
            console.log("Logged In");
        } else {
            console.log("Attempted Username " + loginUsernameEntry);
            console.log("Attempted Password " + loginPasswordEntry);
            console.log("Login Falied");
        };
    });
  
    $('#create-button').on('click', function() {
      
    
        if(createUsernameValid == true && createPasswordValid == true && createEmailValid == true) {
      $('form').animate({
            height: "toggle",
            opacity: "toggle"
        }, "fast");
    }
    });
  
    $('.message a').on('click', function() {
        $('form').animate({
            height: "toggle",
            opacity: "toggle"
        }, "fast");
    });
});



