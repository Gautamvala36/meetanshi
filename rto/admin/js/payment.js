$(document).ready(function () {
    // console.log('paymnet');

    $(document).on("submit", "form", function (even) {

        // console.log('validation-2');
        even.preventDefault();

        var validation = true;

        var error_application = error_email = error_payment = error_number = "";

        $('#error_application').hide();


        // Application Number validation
        if (!$('#application_no').val().trim()) {
            $('#error_application').show();
            error_application = "*Please Select Application Number";
            validation = false;
        }


        // Email validation
        if (!$('#email').val().trim()) {
            $('#error_email').show();
            error_email = "*Please Enter Email Id";
            validation = false;
        } else {
            var emailValid = /^[a-zA-z0-9]+@[a-z]+.[a-z]{3}$/;
            if (!emailValid.test($('#email').val())) {
                $('#error_email').show();
                error_email = "*Email Not Valid";
                validation = false;
            }
        }

        // Gpay & Card Number validation
        if (!$('#number').val().trim()) {
            $('#error_number').show();
            error_number = "*Please Enter Gpay and Card Numebr";
            validation = false;
        } else {
            var num = /^\d{10,16}$/;
            if (!num.test($('#number').val())) {
                $('#error_number').show();
                error_number = "*Please Gpay and Card Numebr Valid";
                validation = false;
            }
        }

        $('#error_application').text(error_application);
        $('#error_email').text(error_email);
        // $('#error_date').text(error_date);
        $('#error_payment').text(error_payment);
        $('#error_number').text(error_number);
        return validation = true;

    });

});


// date validation
$(document).ready(function () {
    // console.log('date-vadtion');
    $(document).on("submit", "form", function (even) {
        validateDate();
        // console.log('date-vadtion-1');
    });
});

function validateDate() {
    // console.log('date-vadtion-2');
    const dateInput = $('#date');
    const errorMessage = $('#error-message');

    // Get the user-entered date from the input field
    const userDate = dateInput.val();

    // Check if the user has entered a date
    if (!userDate) {
        errorMessage.text("*Please enter a date.");
        return;
    }

    // Create a new Date object from the user-entered date
    const inputDate = new Date(userDate);

    // Check if the Date object is valid (not NaN)
    if (isNaN(inputDate)) {
        errorMessage.text("*Invalid date. Please enter a valid date.");
        return;
    }

    // Optional: Check for future/past dates if needed
    const today = new Date();
    if (inputDate < today) {
        errorMessage.text("*Please enter a date that is today or a future date.");
        return;
    }

    // If the date is valid, clear any previous error message
    errorMessage.text("");

}


// insert payment data
$(document).ready(function () {
    // console.log('submit payment');
    $(document).on("submit", "form", function (even) {
        even.preventDefault(); 
        // Serialize the form data
        var formData = $(this).serialize();
        console.log(formData);
        // Send the Ajax request
        $.ajax({
            type: 'POST',
            url: 'submit/insert_payment.php',
            data: formData,
            success: function (response) {
                // console.log(response);
                location.href = "admin_home.php";
            },
            error: function (xhr, status, error) {
                console.error('Error inserting data:', error); 
            }
        });
    });
});
