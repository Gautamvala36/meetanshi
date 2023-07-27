const fromerrr = document.getElementById("#fromerre");
var LastName = document.getElementById("lname");
var LastNamValidation = function () {
  var LastNamValue = LastName.value.trim();

  var lastNameErr = document.getElementById("fromerre");

  if (LastNamValue == "") {
    lastNameErr.innerHTML = "Lastname cannot be empty";
  } else {
    lastNameErr.innerHTML = "";
    return true;
  }
};
LastName.oninput = function () {
  LastNamValidation();
};

var firstName = document.getElementById("fname");

var firstNameValidation = function () {
  var firstNameValue = firstName.value.trim();
  var firstNameErr = document.getElementById("fromerre");

  if (firstNameValue == "") {
    firstNameErr.innerHTML = "Firstname cannot be empty";
  } else {
    firstNameErr.innerHTML = "";
    return true;
  }
};

firstName.oninput = function () {
  firstNameValidation();
};

// Email Address Validation
var emailAddress = document.getElementById("email");
var emailAddressValidation = function () {
  var emailAddressValue = emailAddress.value.trim();
  var emailAddressErr = document.getElementById("fromerre");
  if (emailAddressValue == "") {
    emailAddressErr.innerHTML = "Email cannot be empty";
  } else {
    emailAddressErr.innerHTML = "";
    return true;
  }
};

emailAddress.oninput = function () {
  emailAddressValidation();
  checkemaildata();
};
var mobilenumer = document.getElementById("phone");
var mobilenumerValidation = function () {
  var mobilenumerValue = mobilenumer.value.trim();
  var mobilenumerErr = document.getElementById("fromerre");
  if (mobilenumerValue == "") {
    mobilenumerErr.innerHTML = "Mobilenumber cannot be empty";
  } else {
    mobilenumerErr.innerHTML = "";
    return true;
  }
};
mobilenumer.oninput = function () {
  mobilenumerValidation();
};
// Password Validation
var password = document.getElementById("password");

var passwordValidation = function () {
  var passwordValue = password.value.trim();
  var passwordErr = document.getElementById("fromerre");

  if (passwordValue == "") {
    passwordErr.innerHTML = "Password fields cannot be empty";
  } else {
    passwordErr.innerHTML = "";
    return true;
  }
};
password.oninput = function () {
  passwordValidation();
};

// validation on submit
document.getElementById("btn1").onclick = function (e) {
  firstNameValidation();
  LastNamValidation();
  emailAddressValidation();
  passwordValidation();
  mobilenumerValidation();

  if (
    firstNameValidation() == true &&
    LastNamValidation() == true &&
    emailAddressValidation() == true &&
    passwordValidation() == true &&
    mobilenumerValidation() == true
  ) {
    $(".loader").css("display", "block");
    $(".login-btn").css("display", "none");
    setTimeout(() => {
       $(".otpVarify").css("display", "block");
        $(".loader").css("display", "none");
    }, 4000);
    return false;
  } else {
    return false;
  }
};


