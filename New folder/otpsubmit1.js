var otpVerify = document.getElementById("otpver");

var otpVerification = function () {
  var otpValue = document.getElementById("otpver").value;
  var otpError = document.getElementById("opt-error");
  var otpcheck = "1234";
  if (otpValue == "") {
    otpError.innerHTML = "plese enter otp";
  } else if (!otpcheck.match(otpValue)) {
    otpError.innerHTML = "otp does not match";
  } else {
    otpError.innerHTML = "";
    return true;
  }
};

otpVerify.oninput = function () {
  otpVerification();
};

document.getElementById("optjs").onclick = function (e) {
  if (otpVerification() == true) {
    alert("You are success fully login");
    window.location.href = "welcome.html";
    return false;
  } else {
    alert("Your OTP is wrong please check your OTP");

    return false;
  }
};
