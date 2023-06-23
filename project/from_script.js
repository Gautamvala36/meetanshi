// Email Address Validation
var email_id = document.getElementById("email_id");
var emailAddressValidation = function () {
    var emailAddressValue = email_id.value.trim();
    var validEmailAddress = /[a-z0-9]+@[a-z]+\.[a-z].[com]$/;
    var emailAddressErr = document.getElementById("email_err");

    if (emailAddressValue == "emailAddressValue") {
        emailAddressErr.innerHTML = "";
    }
    else if (emailAddressValue == "") {
        emailAddressErr.innerHTML = "Email Address is required";
    }
    else if (!validEmailAddress.test(emailAddressValue)) {
        emailAddressErr.innerHTML =
            "Email Addre Must Be In Valid Formate With @ Symbol";
    }

    else {
        emailAddressErr.innerHTML = "";
        return true;
    }
};
email_id.oninput = function () {
    emailAddressValidation();
};

// Outlet Name validation
// name = [A-Z]+[a-z0-9]+$

var outlet_name = document.getElementById('outlet_name');
var outletnameValidation = function () {
    var outletnameValue = outlet_name.value.trim();
    var validoutletname = /[A-Z]+[A-Za-z0-9]+$/;
    var outletnameErr = document.getElementById("outlet_name_err");

    if (outletnameValue == "outletnameValue") {
        outletnameErr.innerHTML = "";
    }
    if (outletnameValue == "") {
        outletnameErr.innerHTML = "Please Entry Your Outlet Name";
    }
    else if (!validoutletname.test(outletnameValue)) {
        outletnameErr.innerHTML = "First Letter Is Capital And Valid Outlet Name";
    }
    else {
        outletnameErr.innerHTML = "";
        return true;
    }
};

outlet_name.oninput = function () {
    outletnameValidation();
};

// Admin User Validation 

var admin_name = document.getElementById("admin_name");
var adminnameValidation = function () {
    var selectValue = admin_name.selectedIndex;
    var adminnameErr = document.getElementById("admin_err");

    if (selectValue == "0") {
        adminnameErr.innerHTML = "Please select your Admin User";
        return false;
    }
    else {
        adminnameErr.innerHTML = "";
        return true;
    }
}

admin_name.oninput = function () {
    adminnameValidation();
};

// First Name Validation
var first_name = document.getElementById('first_name');
var firstNameValidation = function () {
    var firstnameValue = first_name.value.trim();
    var validfirstname = /[A-Z]+[A-Za-z]+$/;
    var firstnameErr = document.getElementById("firstname_err");

    if (firstnameValue == "firstnameValue") {
        firstnameErr.innerHTML = "";
    }
    if (firstnameValue == "") {
        firstnameErr.innerHTML = "Please Entry Your First Name";
    }
    else if (!validfirstname.test(firstnameValue)) {
        firstnameErr.innerHTML = "First Letter Is Capital And Valid First Name";
    }
    else {
        firstnameErr.innerHTML = "";
        return true;
    }
};

first_name.oninput = function () {
    firstNameValidation();
};

// Last Name Validation
var last_name = document.getElementById('last_name');
var lastNameValidation = function () {
    var lastnameValue = last_name.value.trim();
    var validlastname = /[A-Z]+[A-Za-z]+$/;
    var lastnameErr = document.getElementById("lastname_err");

    if (lastnameValue == "lastnameValue") {
        lastnameErr.innerHTML = "";
    }
    if (lastnameValue == "") {
        lastnameErr.innerHTML = "Please Entry Your Last Name";
    }
    else if (!validlastname.test(lastnameValue)) {
        lastnameErr.innerHTML = "First Letter Is Capital And Valid Last Name";
    }
    else {
        lastnameErr.innerHTML = "";
        return true;
    }
};

last_name.oninput = function () {
    lastNameValidation();
};

// Mobile Number Validation

var telephone = document.getElementById('telephone');
var telephoneValidation = function () {
    var telephoneValue = telephone.value.trim();
    var validtelephone = /^[1-9]{1}[0-9]{9}$/;
    var telephoneErr = document.getElementById("telephone_err");

    if (telephoneValue == "telephoneValue") {
        telephoneErr.innerHTML = "";
    }
    if (telephoneValue == "") {
        telephoneErr.innerHTML = "Please Entry Your Mobile Number";
    }
    else if (!validtelephone.test(telephoneValue)) {
        telephoneErr.innerHTML = "Valid Mobile Number";
    }
    else {
        telephoneErr.innerHTML = "";
        return true;
    }
};

telephone.oninput = function () {
    telephoneValidation();
};

// Street Validation

var street = document.getElementById('street');
var streetValidation = function () {
    var streetValue = street.value.trim();
    var validstreet = /^[a-z0-9\s,'-]*$/;
    var streetErr = document.getElementById("street_err");

    if (streetValue == "streetValue") {
        streetErr.innerHTML = "";
    }
    if (streetValue == "") {
        streetErr.innerHTML = "Please Entry Your Street";
    }
    else if (!validstreet.test(streetValue)) {
        streetErr.innerHTML = "Valid Street";
    }
    else {
        streetErr.innerHTML = "";
        return true;
    }
};

street.oninput = function () {
    streetValidation();
};

// City Validation

var city = document.getElementById('city');
var cityValidation = function () {
    var cityValue = city.value.trim();
    var validcity = /[A-Z]+[A-Za-z]+$/;
    var cityErr = document.getElementById("city_err");

    if (cityValue == "cityValue") {
        cityErr.innerHTML = "";
    }
    if (cityValue == "") {
        cityErr.innerHTML = "Please Entry Your City";
    }
    else if (!validcity.test(cityValue)) {
        cityErr.innerHTML = "Valid City";
    }
    else {
        cityErr.innerHTML = "";
        return true;
    }
};

city.oninput = function () {
    cityValidation();
};

// Postcode Validation
var postcode = document.getElementById('postcode');
var postcodeValidation = function () {
    var postcodeValue = postcode.value.trim();
    var validpostcode = /^([0-9]{6}$)/;
    var postcodeErr = document.getElementById("postcode_err");

    if (postcodeValue == "postcodeValue") {
        postcodeErr.innerHTML = "";
    }
    if (postcodeValue == "") {
        postcodeErr.innerHTML = "Please Entry Your Postcode";
    }
    else if (!validpostcode.test(postcodeValue)) {
        postcodeErr.innerHTML = "Please Specify A Valid Postcode";
    }
    else {
        postcodeErr.innerHTML = "";
        return true;
    }
};

postcode.oninput = function () {
    postcodeValidation();
};

// Country Validation

var country = document.getElementById("country");
var countryValidation = function () {
    var selectValue = country.selectedIndex;
    var countryErr = document.getElementById("country_err");

    if (selectValue == "0") {
        countryErr.innerHTML = "Please select your Country";
        return false;
    }
    else {
        countryErr.innerHTML = "";
        return true;
    }
}

country.oninput = function () {
    countryValidation();
};

// validation on submit

document.getElementById("sava_edit").onclick = function (e) {
    // console.log("sava_edit");
    emailAddressValidation();
    outletnameValidation();
    adminnameValidation();
    firstNameValidation();
    lastNameValidation();
    telephoneValidation();
    streetValidation();
    cityValidation();
    postcodeValidation();
    countryValidation();


    if (emailAddressValidation() == true && outletnameValidation() == true && adminnameValidation() == true && firstNameValidation() == true && lastNameValidation() == true && telephoneValidation() == true && streetValidation() == true && cityValidation() == true && postcodeValidation() == true && countryValidation() == false) {
        window.location.href = "from.php";
        // return true;
    } else {
        return false;

    }
}

// hidden from

$(document).ready(function () {
    $("#second-toggle-btn").click(function () {
        $("#second_from").toggle();
    });
});


// function fun() {
//     document.getElementById("myform").reset();
//     $("#second-toggle-btn").on("click", function () {
//         $("#second_from").toggle();
//     });
// }

// $('form').on('.reset', function () {
//     $(".myform", $(this)).each(function () {
//         var $t = $(this);
//         $t.val($t.data('defaultvalue'));
//     });
// });

// // ----------------reset code------------
$(document).ready(function () {
    $(".reset").click(function () {
        $("input").val("");
        $("option").val("");
        $(".error").text("");
        $("#second_from").hide();
    });
});