function mypassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}




    // $(document).on("submit", "form", function(even){

    //     console.log('validation-2');
    //     even.preventDefault();

    //     var validation = true;

    //     var error_fullname = error_fathername = error_gender = error_dob = error_bloodgroup =
    //         error_phonenumber =
    //         error_email = error_password = error_address1 = error_address2 = error_aadhernumber =
    //         error_licensetype = error_photo = error_state = error_district = error_city =
    //         error_pincode = "";

    //     $('#error_fullname').hide();
    //     $('#error_fathername').hide();
    //     $('#error_gender').hide();
    //     $('#error_dob').hide();
    //     $('#error_bloodgroup').hide();
    //     $('#error_phonenumber').hide();
    //     $('#error_email').hide();
    //     $('#error_password').hide();
    //     $('#error_address1').hide();
    //     $('#error_address2').hide();
    //     $('#error_aadhernumber').hide();
    //     $('#error_licensetype').hide();
    //     $('#error_photo').hide();
    //     $('#error_state').hide();
    //     $('#error_district').hide();
    //     $('#error_city').hide();
    //     $('#error_pincode').hide();


    //     // Full Name and Father name validation
    //     if (!$('#fullname').val().trim()) {
    //         $('#error_fullname').show();
    //         error_fullname = "*Full Name required";
    //         validation = false;
    //     } else {
    //         var nameValid = /^[A-Z][a-z]*\s[A-z]*$/;
    //         if (!nameValid.test($('#fullname').val())) {
    //             $('#error_fullname').show();
    //             error_fullname = "*Full Name Not Valid";
    //             validation = false;
    //         }
    //     }

    //     if (!$('#fathername').val().trim()) {
    //         $('#error_fathername').show();
    //         error_fathername = "*Father Name Required";
    //         validation = false;
    //     } else {
    //         var nameValid = /^[A-Z][a-z]*\s[A-z]*$/;
    //         if (!nameValid.test($('#fathername').val())) {
    //             $('#error_fathername').show();
    //             error_fathername = "*Father Name Not Valid";
    //             validation = false;
    //         }
    //     }

    //     // gender validation
    //     if (!$('#gender').val()) {
    //         $('#error_gender').show();
    //         error_gender = "*Gender Required";
    //         validation = false;
    //     }

    //     // Date Of Birth  validation 
    //     if (!$('#dob').val()) {
    //         $('#error_dob').show();
    //         error_dob = "*Date Of Birth Required";
    //         validation = false;
    //     }

    //     // Blood Group validation
    //     if (!$('#bloodgroup').val()) {
    //         $('#error_bloodgroup').show();
    //         error_bloodgroup = "*Blood Group Required";
    //         validation = false;
    //     }

    //     // Phone Number validation
    //     if (!$('#p_number').val().trim()) {
    //         $('#error_phonenumber').show();
    //         error_phonenumber = "*Phone Number required";
    //         validation = false;
    //     } else {
    //         var numberValid = /^[0-9]{10}$/;
    //         if (!numberValid.test($('#p_number').val())) {
    //             $('#error_phonenumber').show();
    //             error_phonenumber = "*Phone Number Not Valid";
    //             validation = false;
    //         }
    //     }

    //     // email validation
    //     if (!$('#email').val().trim()) {
    //         $('#error_email').show();
    //         error_email = "*Email required";
    //         validation = false;
    //     } else {
    //         var emailValid = /^[a-zA-z0-9]+@[a-z]+.[a-z]{3}$/;
    //         if (!emailValid.test($('#email').val())) {
    //             $('#error_email').show();
    //             error_email = "*Email Not Valid";
    //             validation = false;
    //         }
    //     }

    //     // Password validation
    //     if (!$('#password').val().trim()) {
    //         $('#error_password').show();
    //         error_password = "*Password required";
    //         validation = false;
    //     } else {
    //         var passwordvalid = /^[a-zA-Z0-9]+$/;
    //         if (!passwordvalid.test($('#password').val())) {
    //             $('#error_password').show();
    //             error_password = "*Password Not Valid";
    //             validation = false;
    //         }
    //     }

    //     // Address Line 1 and Address Line validation
    //     if (!$('#address1').val().trim()) {
    //         $('#error_address1').show();
    //         error_address1 = "*Address Line 1 required";
    //         validation = false;
    //     }

    //     if (!$('#address2').val().trim()) {
    //         $('#error_address2').show();
    //         error_address2 = "*Address Line 2 required";
    //         validation = false;
    //     }

    //     // Aadhar Number validation
    //     if (!$('#aadhar_number').val().trim()) {
    //         $('#error_aadhernumber').show();
    //         error_aadhernumber = "*Aadhar Card Number required";
    //         validation = false;
    //     } else {
    //         var aadhernumber = /^\d{4}\s\d{4}\s\d{4}$/;
    //         if (!aadhernumber.test($('#aadhar_number').val())) {
    //             $('#error_aadhernumber').show();
    //             error_aadhernumber = "*Aadhar Card Number Not Valid";
    //             validation = false;
    //         }
    //     }

    //     // License Type validation
    //     if (!$('#license_type').val().trim()) {
    //         $('#error_licensetype').show();
    //         error_licensetype = "*License Type required";
    //         validation = false;
    //     }

    //     // Photo validation
    //     if (!$('#imageupload').val().trim()) {
    //         $('#error_photo').show();
    //         error_photo = "*Photo Upload required";
    //         validation = false;
    //     }

    //     // State validation
    //     if (!$('#sts').val().trim()) {
    //         $('#error_state').show();
    //         error_state = "*State required";
    //         validation = false;
    //     }

    //     // District validation
    //     if (!$('#state').val().trim()) {
    //         $('#error_district').show();
    //         error_district = "*District required";
    //         validation = false;
    //     }

    //     // City validation
    //     if (!$('#city').val().trim()) {
    //         $('#error_city').show();
    //         error_city = "*City required";
    //         validation = false;
    //     } else {
    //         var city = /^[a-zA-z]*$/;
    //         if (!city.test($('#city').val())) {
    //             $('#error_city').show();
    //             error_city = "*City Not Valid";
    //             validation = false;
    //         }
    //     }

    //     // Pincode validation
    //     if (!$('#pincode').val().trim()) {
    //         $('#error_pincode').show();
    //         error_pincode = "*Pincode required";
    //         validation = false;
    //     } else {
    //         var pincode = /^(\d{4}|\d{6})$/;
    //         if (!pincode.test($('#pincode').val())) {
    //             $('#error_pincode').show();
    //             error_pincode = "*Pincode Not Valid";
    //             validation = false;
    //         }
    //     }


    //     $('#error_fullname').text(error_fullname);
    //     $('#error_fathername').text(error_fathername);
    //     $('#error_gender').text(error_gender);
    //     $('#error_dob').text(error_dob);
    //     $('#error_bloodgroup').text(error_bloodgroup);
    //     $('#error_phonenumber').text(error_phonenumber);
    //     $('#error_email').text(error_email);
    //     $('#error_password').text(error_password);
    //     $('#error_address1').text(error_address1);
    //     $('#error_address2').text(error_address2);
    //     $('#error_aadhernumber').text(error_aadhernumber);
    //     $('#error_licensetype').text(error_licensetype);
    //     $('#error_photo').text(error_photo);
    //     $('#error_state').text(error_state);
    //     $('#error_district').text(error_district);
    //     $('#error_city').text(error_city);
    //     $('#error_pincode').text(error_pincode);
    //     return validation = true;

    // });


function myFunction() {
    const getAge = (dob) => {
        // Calculate age
        const age = (new Date() - dob) / (31556952000);
        return age;
    };
    
    console.log('agecalculate-1');
    
    $('#dob').change(function () {
        try {
            console.log('agecalculate-2');
            const dateOfBirth = new Date($(this).val());
            const age = getAge(dateOfBirth);
            
            // Perform the same age-based actions as before
            if (age < 16) {
                $("#license_type").prop('disabled', true);
                $('#ages').text('Registration From is Only 15+');
                $('#submit').hide();
            } else if (age >= 16 && age <= 18) {
                $('#submit').show();
                $("#license_type").prop('disabled', false);
                $('#ages').text('');
                $('#dl').val(2).change().css('display', 'none');
                $('#license_type').val(1).change();
            } else if (age > 18) {
                $('#submit').show();
                $("#license_type").prop('disabled', false);
                $('#ages').text('');
                $('#license_type').val(1).change();
                $('#license_type').val(2).change();
            }
        } catch (error) {
            console.error('Error:', error.message);
            // You can handle the error here, show a message to the user, or take other actions as needed.
        }
    });
};