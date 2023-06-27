$(document).ready(function () {
    $("#sava_edit").click(function () {


        var status = false;
        if ($('#first-toggle-btn').prop('checked') == true) {
            status = $('#first-toggle-btn').val();
        }
        // console.log(status);
        var email = $(this).closest("#myform").find("#email_id").val();
        // console.log(email);
        var outletname = $(this).closest("#myform").find("#outlet_name").val();
        var adminname = $(this).closest("#myform").find("#admin_name").val();
        var firstname = $(this).closest("#myform").find("#first_name").val();
        var lastname = $(this).closest("#myform").find("#last_name").val();
        var company = $(this).closest("#myform").find("#company").val();
        var telephone = $(this).closest("#myform").find("#telephone").val();
        var street = $(this).closest("#myform").find("#street").val();
        var city = $(this).closest("#myform").find("#city").val();
        var postcode = $(this).closest("#myform").find("#postcode").val();
        var country = $(this).closest("#myform").find("#country").val();
        var state = $(this).closest("#myform").find("#state").val();
        // var toggle = $(this).closest("#myform").find("#second-toggle-btn").val();
        var toggle = false;
      
        console.log(toggle);

        if ($('#second-toggle-btn').prop('checked') == true) {
            toggle = $('#second-toggle-btn').val();
            console.log(toggle);
        }
       
        $.ajax({
            type: "POST",
            url: "insert.php", // Replace "insert.php" with the file path to your PHP script that handles the insert query
            data: {
                toggle: toggle, status: status, email_id: email, outlet_name: outletname, admin_name: adminname, first_name: firstname,
                last_name: lastname, company: company, tele_phone: telephone, street: street, city: city, post_code: postcode, country: country, state: state
            },
            success: function (response) {
                // console.log(data);
                console.log(response);
               
            },
            error: function (xhr, status, error) {
                // console.error(error);
            }
        });
    
    });


});
