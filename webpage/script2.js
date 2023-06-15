
// Email Address Validation
var emailAddress = document.getElementById("emailAddress");
var emailAddressValidation = function () {
 var emailAddressValue = emailAddress.value.trim();
 var validEmailAddress = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var damemail = "gautam@gmail.com";
 var emailAddressErr = document.getElementById("email-err");

  if (emailAddressValue == "") {
    emailAddressErr.innerHTML = "Email Address is required";
  } else if (!validEmailAddress.test(emailAddressValue)) {
    emailAddressErr.innerHTML =
      "Email Addre must be in valid formate with @ symbol";
  }
   else if (!damemail.match(emailAddressValue)) {
    emailAddressErr.innerHTML = "your email is not registered";
  }
   else {
    emailAddressErr.innerHTML = "";
    return true;
  }
};

emailAddress.oninput = function () {
  emailAddressValidation();
};


// Password Validation
var password = document.getElementById("password");
var passwordValidation = function () {
 var passwordValue = password.value.trim();
  var damepas = "Gautam@123";
   var validPassword =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
 var passwordErr = document.getElementById("password-err");
  if (passwordValue == "") {
    passwordErr.innerHTML = "Password is required";
  } else if (!validPassword.test(passwordValue)) {
    passwordErr.innerHTML =
      "Password must have at least one Uppercase, lowercase, digit, special characters & 8 characters";
  } 
  else if (!damepas.match(passwordValue)) {
    passwordErr.innerHTML = "password is incorrect";
  }
   else {
    passwordErr.innerHTML = "";
    return true;
  }
};

password.oninput = function () {
  passwordValidation();
};

document.getElementById("login2").onclick = function (e) {
  emailAddressValidation();
  
  passwordValidation();

  if (emailAddressValidation() == true && passwordValidation() == true) {
    setTimeout(() => {
      window.location.href = "log.html";
    }, 2000);
    return false; 
  } else {
    return false;
  }
};
