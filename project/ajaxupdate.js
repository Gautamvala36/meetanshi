$("#sava_outlet").click(function () {

    // console.log('#sava_outlet');
    var status = false;
    if ($('#first-toggle-btn').prop('checked') == true) {
        status = $('#first-toggle-btn').val();
    }
    // console.log(status);
    var email = $(this).closest("#myform").find("#email_id").val();
    // console.log(email);
    var outletname = $("#outlet_name").val();
    var adminname = $("#admin_name").val();
    var firstname = $("#first_name").val();
    var lastname = $("#last_name").val();
    var company = $("#company").val();
    var telephone = $("#telephone").val();
    var street = $("#street").val();
    var city = $("#city").val();
    var postcode = $("#postcode").val();
    var country = $("#country").val();
    var state = $("#state").val();
    // var toggle = $(this).closest("#myform").find("#second-toggle-btn").val();
    var toggle = false;
    console.log(toggle);

    if ($('#second-toggle-btn').prop('checked') == true) {
        toggle = $('#second-toggle-btn').val();
        console.log(toggle);
    }
    $.ajax({
        url: 'update.php',
        type: 'POST',
        data: {
            toggle: toggle, status: status, email_id: email,outlet_name : outletname, admin_name: adminname, first_name: firstname,
            last_name: lastname, company: company, tele_phone: telephone, street: street, city: city, post_code: postcode, country: country, state: state
        },
        success: function (response) {
            // alert(response);
            console.log(response);
        }
    });
});