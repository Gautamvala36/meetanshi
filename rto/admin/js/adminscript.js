
$(document).ready(function () {
    // console.log('hello');

    $('.menu ul li a').click(function (e) {
        e.preventDefault();
        var page = $(this).data('page');
        // console.log(page);
        LoadContent(page);
    });
    function LoadContent(page) {
        $.ajax({
            url: page + '.php',
            type: 'GET',
            dataType: 'html',
            success: function (result) {
                $('.contain div').html(result);
                if (page == "admin_registerd") {
                    print_state("sts");
                }
            },
        });
    }
});


//  accept user
// $(document).ready(function () {
// $('.accept').click(function () {
//     if (confirm("Registerd Status Request Accept")) {
//         console.log('hello');
//         location.href = "accept_user.php?id=" + $(this).attr('id');
//     }
// });


// $("body").on("click", ".accept", function(e) {
//     e.preventDefault();
//     console.log('accept');
//     if (confirm("Registerd Status Request Accept")) {
//         console.log('hello');
//         location.href = "accept_user.php?id=" + $(this).attr('id');
//     }
// });




// console.log('hello');

$(document).ready(function () {
    // Click event handler for the "accept" button
    $("body").on("click", ".accept", function (e) {
        e.preventDefault();
        var id = $(this).attr('id');
        // console.log(id);

        // Ajax call inside the click event handler
        $.ajax({
            url: './accept_user.php',
            method: 'POST',
            data: { id: id },
            success: function (data) {
                // console.log(data);

            },
            error: function (err) {
                console.error('Error accepting request:', err);
            }
        });
    });
});


//  reject user
// $("body").on("click", ".reject", function(e) {
//     e.preventDefault();
//     console.log('Reject');
//     if (confirm("Registerd Status Request Reject")) {
//         console.log('hello');
//          location.href = "reject_user.php?id=" + $(this).attr('id');
//     }
// });

$(document).ready(function () {
    // Click event handler for the "accept" button
    $("body").on("click", ".reject", function (e) {
        e.preventDefault();
        var id = $(this).attr('id');
        // console.log(id);

        // Ajax call inside the click event handler
        $.ajax({
            url: './reject_user.php', 
            method: 'POST',
            data: { id: id },
            success: function (data) {
                // console.log(data);

            },
            error: function (err) {
                console.error('Error accepting request:', err);
            }
        });
    });
});




// delete Contact Us 
$('.delete').click(function () {
    if (confirm("User Message delete")) {
        location.href = "delete_user.php?id=" + $(this).attr('id');
    }
});


// registration click 
$("body").on("click", "#registration", function (e) {
    e.preventDefault();
    $(".body_regis").show();
    $('.hidden').hide();
    $('#edit_reg').hide();
});


$("body").on("click", "#close", function (e) {
    e.preventDefault();
    $('.body_regis').hide();
    $('.hidden').show();
});

// registration in updata
$("body").on("click", ".update", function (e) {

    // console.log('hello');
    e.preventDefault();
    $('#edit_reg').show();
    $('.hidden').hide();

    var editId = $(this).attr('id');
    // console.log(editId);
    $.ajax({
        url: "edit.php",
        type: "POST",
        data: {
            editId: editId
        },
        success: function (response) {
            var data = JSON.parse(response);
            // console.log(data);
            $('.userid').val(data['id']);
            $(".appli_no").val(data['application_no']);
            $(".appli_no").text(data['application_no']);
            $(".f1").val(data['fullname']);
            $(".f2").val(data['fathername']);
            $(".gen_der").val(data['gender']);
            $(".date-mask").val(data['dob']);
            $(".blo_group").val(data['bloodgroup']);
            $(".phone").val(data['mobilenumber']);
            $(".ema_il").val(data['email']);
            $(".pass").val(data['password']);
            $(".addr1").val(data['address1']);
            $(".addr2").val(data['address2']);
            $(".aad_numb").val(data['aadharnumber']);
            $(".lice_type").val(data['license_type']);
            // $(".image").val(data['photo']);
            $(".state_s").val(data['state']);
            $(".district_s").val(data['district']);
            $(".city_s").val(data['city']);
            $(".pin_code").val(data['pincode']);
            $(".sta_tus").val(data['status']);

        }
    });

});



// admin_request.php 

$("body").on("click", "#request", function (e) {
    e.preventDefault();
    // console.log('request');
    $('#newrequest').hide();
    $('.body_request').show();
});

$("body").on("click", "#close_request", function (e) {
    e.preventDefault();
    // console.log('request');
    $('#newrequest').show();
    $('.body_request').hide();
});


// admin_payment.php 

$("body").on("click", "#examdata", function (e) {
    e.preventDefault();
    // console.log('request');
    $('.showtable').hide();
    $('.body_exam').show();
});

$("body").on("click", "#close_exam", function (e) {
    e.preventDefault();
    // console.log('request');
    $('.showtable').show();
    $('.body_exam').hide();
});


// $("body").on("click", "#close_exam_form", function (e) {
//     e.preventDefault();
//     // console.log('request');
//     $('.showtable').show();
//     $('.exam_form').hide();
// });


// $("body").on("click", "#exam", function (e) {
//     e.preventDefault();
//     // console.log('request');
//     $('.exam_form').show();
//     $('.showtable').hide();
// });

