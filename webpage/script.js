const showPassword = document.querySelector("#checkc");
const passwordChange = document.querySelector("#password");


showPassword.addEventListener("click", function () {
    this.classList.toggle("fa");
    const type = passwordChange.getAttribute("type")
        === "password" ? "text" : "password";
    passwordChange.setAttribute("type", type);
})

var LastName = document.getElementById("Lastname");
var LastNamValidation = function () {
    LastNamValue = LastName.value.trim();
    validLastName = /^[A-Za-z0-9]+$/;
    // dam1 = /.*[0-9]$/m;
    last1 = /(\b[a-z](?!\s))/g;
    lastNameErr = document.getElementById('last-name-err');

    if (LastNamValue == "") {
        lastNameErr.innerHTML = "Last Name is required";

    } else if (!validLastName.test(LastNamValue)) {
        lastNameErr.innerHTML = "Last Name must be only string without white spaces";
    }
    else if (last1.test(LastNamValue)) {
        lastNameErr.innerHTML = "Last letter is not capital";
    }
    //  else if (!dam1.test(LastNamValue)) {
    //     lastNameErr.innerHTML = "Last letter is not number";
    // }
    else {
        lastNameErr.innerHTML = "";
        return true;

    }

}
LastName.oninput = function () {
    LastNamValidation();
}

var firstName = document.getElementById("firstName");

var firstNameValidation = function () {

    firstNameValue = firstName.value.trim();
    validFirstName = /^[A-Za-z0-9]+$/;
    // dam = /.*[0-9]$/m;
    first1 = /(\b[a-z](?!\s))/g;
    firstNameErr = document.getElementById('first-name-err');

    if (firstNameValue == "") {
        firstNameErr.innerHTML = "First Name is required";

    }
    else if (!validFirstName.test(firstNameValue)) {
        firstNameErr.innerHTML = "First Name must be only string without white spaces";
    }
    else if (first1.test(firstNameValue)) {
        firstNameErr.innerHTML = "first letter is not capital";
    }
    //  else if (!dam.test(firstNameValue)) {
    //     firstNameErr.innerHTML = "last letter is not number";
    // }
    else {
        firstNameErr.innerHTML = "";
        return true;

    }
}

firstName.oninput = function () {

    firstNameValidation();
}


// Email Address Validation
var emailAddress = document.getElementById("emailAddress");;
var emailAddressValidation = function () {

    emailAddressValue = emailAddress.value.trim();
    validEmailAddress = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    emailAddressErr = document.getElementById('email-err');

    if (emailAddressValue == "") {
        emailAddressErr.innerHTML = "Email Address is required";

    } else if (!validEmailAddress.test(emailAddressValue)) {
        emailAddressErr.innerHTML = "Email Addre must be in valid formate with @ symbol";
    }
    else {
        emailAddressErr.innerHTML = "";
        return true;
    }

}

let emaildata = ["gautam@gmail.com", "jay@gmail.com"];
function checkemaildata() {
    if (emailAddressValue == "") {
        for (let i = 0; i <= emaildata.length; i++) {
            if (emailAddressValue == emaildata[i]) {
                emailAddressErr.innerHTML = "Email is already exits";
                return true;
            }
        }

    }
    return false;
}

emailAddress.oninput = function () {

    emailAddressValidation();
    checkemaildata();
}

// Password Validation
var password = document.getElementById("password");;

var passwordValidation = function () {

    passwordValue = password.value.trim();
    validPassword = /^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/;

    passwordErr = document.getElementById('password-err');

    if (passwordValue == "") {
        passwordErr.innerHTML = "";
    }
    else if (passwordValue == "") {
        passwordErr.innerHTML = "Password is required";
    }
    else if (validPassword.test(passwordValue)) {
        passwordErr.innerHTML = "Password must have at least one Upper,lowercase, digit, special characters & 6 characters";
    }
    else {
        passwordErr.innerHTML = "";
        return true;
    }
}
password.oninput = function () {
    passwordValidation();

    // confirmPasswordValidation();

}


// validation on submit
// document.getElementById("btn1").onclick = function (e) {
//     firstNameValidation();
//     LastNamValidation();
//     emailAddressValidation();
//     passwordValidation();
//     checkemaildata();

//     if (firstNameValidation() == true && LastNamValidation() == true &&
//         emailAddressValidation() == true &&
//         passwordValidation() == true && checkemaildata() == false) {
//         setTimeout(() => {
//             window.location.href = "login.html";
//         }, 4000);
//         return false;
//     } else {
//         return false;

//     }
// }


document.getElementById("btn1").onclick = function (e) {
    firstNameValidation();
    LastNamValidation();
    emailAddressValidation();
    passwordValidation();
    checkemaildata();

    if (
        firstNameValidation() == true &&
        LastNamValidation() == true &&
        emailAddressValidation() == true &&
        passwordValidation() == true &&
        checkemaildata() == false
    ) {
        $(".loader").css("display", "block");
        $(".btn").css("display", "none");
        setTimeout(() => {
            $(".optverfiy1").css("display", "block");
            $(".loader").css("display", "none");
        }, 4000);
        return false;
    } else {
        return false;
    }
};


