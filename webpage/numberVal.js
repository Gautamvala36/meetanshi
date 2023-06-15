var phoneNumber = document.getElementById("mobileNumber");
var phoneNumberValidation = function () {
  var phoneNumbervalue = phoneNumber.value.trim();
  var numberCheck = /^[0-9]+$/;
  var numbererrr = document.getElementById("number-err1");

  if (phoneNumbervalue == "") {
    numbererrr.innerHTML = "plese enter phone number";
  } else if (!numberCheck.test(phoneNumbervalue)) {
    numbererrr.innerHTML =
      "phone number is not valid ";
  }
  else {
    numbererrr.innerHTML = "";
    return true;
  }
};

phoneNumber.oninput = function () {
  phoneNumberValidation();

}

document.getElementById("send").onclick = function (e) {
  phoneNumberValidation();

};

var otpVerify = document.getElementById("optVerify");

var otpVerification = function () {
  var otpValue = otpVerify.value.trim();
  var otpCheck = "1234";
  console.log(otpValue);
  var otpError = document.getElementById("opt-error");

  if (otpValue == "") {
    otpError.innerHTML = "plese enter otp";
  } else if (!otpCheck.match(otpValue)) {
    otpError.innerHTML = "opt is correct";
  } else {
    otpError.innerHTML = "";
    return true;
  }

}

otpVerify.oninput = function () {
  otpVerification();
}

document.getElementById("verifybtn").onclick = function (e) {
  otpVerification();

  if (otpVerification() == true) {
    console.log("hii");
    setTimeout(() => {
      window.location.href = "log.html";
    }, 4000);
    return false;
  } else {
    return false;
  }
};

document.getElementById("send").onclick = function (e) {
  phoneNumberValidation();
   if (phoneNumberValidation() == true) {
     $("#lod").css("display", "block");
     $(".btn4").css("display", "none");
     
     setTimeout(() => {
       $(".optverfiy1").css("display", "block");
       $("#lod").css("display","none");
     }, 2000);
     return false; 
   } else {
     return false;
   }
 };


// var otpver = document.getElementById("otpVerify");

// var otpVerification = function () {
//   var otpValue = document.getElementById("otpVerify").value;
//   var otpError = document.getElementById("opt-error");
//   var otpcheck = "1234";
//   if (otpValue == "") {
//     otpError.innerHTML = "plese enter otp";
//   } else if (!otpcheck.match(otpValue)) {
//     otpError.innerHTML = "otp does not match";
//   } else {
//     otpError.innerHTML = "";
//     return true;
//   }
// };

// otpver.oninput = function () {
//   otpVerification();
// };

// document.getElementById("verifybtn").onclick = function (e) {
//   if (otpVerification() == true) {
//     alert("You are success fully login");
//     window.location.href = "log.html";
//     return false;
//   } else {
//     alert("Your OTP is wrong please check your OTP");

//     return false;
//   }
// };