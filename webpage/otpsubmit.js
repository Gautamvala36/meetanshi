var otpVerify1 = document.getElementById("optVerify");
// console.log(otpVerify1);
var otpVerification = function () {
  var otpValue = document.getElementById("optVerify").value; 
  var otpError = document.getElementById("opt-error");
  var otpcheck = "1234";
  if(otpValue == ""){
    otpError.innerHTML = "Plese enter your otp";

  }
  else if(!otpcheck.match(otpValue)){
    otpError.innerHTML = "OTP does not match";

  }
   else{
    otpError.innerHTML = "";
    return true;
  }
};

otpVerify1.oninput = function () {
  otpVerification();
}

document.getElementById("verifybtn").onclick = function (e) {

    if(otpVerification() == true){
      alert("Your account is created successfully");  window.location.href = "index2.php";
      return false;
    }
    else{
      alert("Your OTP is wrong please check your OTP");

      return false;

    }

};

