function myFunction() {
    var fname = document.getElementById('firstname').value;
    var lname = document.getElementById('lastname').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('confirm_password').value;
    var firstNameWarning = document.getElementById('firstNameWarning');
    var lastNameWarning = document.getElementById('lastNameWarning');
    var emailWarning = document.getElementById('emailWarning');
    var passwordWarning = document.getElementById('passwordWarning');
    var confpasswordWarning = document.getElementById('confpasswordWarning');


    if (fname == "") {
        firstNameWarning.textContent = "First name must be filled out";
    }
    else if (fname.trim() !== fname) {
        firstNameWarning.textContent = "First name should not have leading or trailing spaces";
    }
    else if (!/^[A-Za-z]+$/.test(fname)) {
        firstNameWarning.textContent = "First name must contain only alphabetic characters";
    }
    else {
        firstNameWarning.textContent = "";
    }

    if (lname == "") {
        lastNameWarning.textContent = "last name must be filled out";
    }
    else if (lname.trim() !== lname) {
        lastNameWarning.textContent = "Last name should not have leading or trailing spaces";
    }
    else if (!/^[A-Za-z]+$/.test(lname)) {
        lastNameWarning.textContent = "Last name must contain only alphabetic characters";
    }
    else {
        lastNameWarning.textContent = "";
    }
    // return false;

    // .........Email validation..........//
    if (email == "") {
        emailWarning.textContent = "Email is Required....";
    }
    else if (!isValidEmail(email)) {
        emailWarning.textContent = "Email is not valid format";
    }
    else {
        emailWarning.textContent = "";
    }

    function isValidEmail(email) {
        var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        return emailRegex.test(email);
    }




    // Validate password //
    if (password == "") {
        passwordWarning.textContent = "Password is required";
    }
    else if (password.length < 6 || password.length > 8) {
        passwordWarning.textContent = "Password must be between 6 and 8 characters long";
    }
    else if (!/[a-z]/.test(password)) {
        passwordWarning.textContent = "Password must contain at least one lowercase letter";
    }
    else if (!/[A-Z]/.test(password)) {
        passwordWarning.textContent = "Password must contain at least one uppercase letter";
    }
    else if (!/\d/.test(password)) {
        passwordWarning.textContent = "Password must contain at least one number";
    }
    else {
        passwordWarning.textContent = "";
    }

    // confirm_password_validation //
    if (confirm_password == "") {
        confpasswordWarning.textContent = "confirmpassword is required";
    }
    else if (confirm_password.length < 6 || confirm_password.length > 8) {
        confpasswordWarning.textContent = "confirmpassword must be between 6 and 8 characters long";
    }
    else if (!/[a-z]/.test(confirm_password)) {
        confpasswordWarning.textContent = "confirmpassword must contain at least one lowercase letter";
    }
    else if (!/[A-Z]/.test(confirm_password)) {
        confpasswordWarning.textContent = "confirmpassword must contain at least one uppercase letter";
    }
    else if (!/\d/.test(confirm_password)) {
        confpasswordWarning.textContent = "confirmpassword must contain at least one number";
    }
    else {
        confpasswordWarning.textContent = "";
    }

    if (password == confirm_password) {
        if (!fname == "" && !lname == "" && !email == "" && !password == "" && !confirm_password == "") {
            if ((email == 'gautam@gmail.com') || (email == 'jay@gmail.com') || (email == 'meet@gmail.com') || (email == 'ani@gmail.com') || (email == 'anil@gmail.com')) {
                document.getElementById('validate').addEventListener('click', function () {
                    document.getElementById('error').style.display = 'block';
                });
                document.getElementById('error').addEventListener('click', function () {
                    document.getElementById('container').style.display = 'none';
                    document.getElementById('loader').style.display = 'flex';

                    document.getElementById('error').style.display = 'none';
                    setTimeout(function () {

                        window.location.href = 'login.html';
                    }, 10000);
                });
            }
            else {
                document.getElementById('validate').addEventListener('click', function () {
                    document.getElementById('error').style.display = 'none';
                    document.getElementById('container').style.display = 'none';
                    document.getElementById('loader').style.display = 'flex';

                    setTimeout(function () {
                        window.location.href = 'login.html';
                    }, 10000); // 10 seconds
                });
            }

        }
    }
    else{
        document.getElementById("confpasswordWarning").innerHTML = "New Password and Confirm Password Not Same";
    }
    return false;
}

const showPasswordCheckbox = document.getElementById('showPassword');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm_password');

showPasswordCheckbox.addEventListener('change', function () {
    const isChecked = this.checked;
    passwordInput.type = isChecked ? 'text' : 'password';
    confirmPasswordInput.type = isChecked ? 'text' : 'password';
});


