$(document).ready(function () {

  $('.createbtn').click(function () {
    $(location).prop('href', 'register.html');
  });
});


$(document).ready(function () {

  $('#btn1').click(function () {
    $('.frm').css({ 'display': 'none' });
    $('.frm2').show();
    $('.Verify').css({ 'display': 'none' });
    $('#btn1').css({ 'background-color': '#ab8049', 'color': 'white' });
    $('#btn2').css({ 'background-color': '#fdfcc3', 'color': 'black' });
  });
  $('#btn2').click(function () {
    $('.frm2').css({ 'display': 'none' });
    $('.frm').show();
    $('#btn2').css({ 'background-color': '#ab8049', 'color': 'white' });
    $('#btn1').css({ 'background-color': '#fdfcc3', 'color': 'black' });
  });

  $('.sendotp').click(function () {
    var phone = $('#phone').val();
    if(phone==""){
      $("#phoneerror").text("Please Enter Mobile_Number");
    }
    else
    {
      $("#phoneerror").text('');
    $('.loder1').css({ 'display': 'block' });
    $('.sendotp').css({ 'display': 'none' });
    setTimeout(function () {
      $('.Verify').css({ 'display': 'block' });
      $('.loder1').css({ 'display': 'none' });
      $('.sendotp').css({ 'display': 'block' });
      $('input[value="SEND OTP"]').val('RESEND OTP');
    }, 2000);
    }

    $("#btn4").click(function (event) {
      event.preventDefault();

      var otp = $('#otptext').val();
      if (otp == "") {
        $("#otperror").text("plz fillout otp");
      }
      else if (otp == "123456") {
        $("#otperror").text('');
        $('.loder2').css({ 'display': 'block' });
        $('#btn4').css({ 'display': 'none' });
        setTimeout(function () {
          var nextPageUrl = "welcome.html";
          window.location.href = nextPageUrl;
          $('.loder2').css({ 'display': 'none' });
          // $('#submit').css({'display':'block'});
        }, 2000);
      }
      else if (!otp === "123456") {
        $("#otperror").text("Wrong otp");
      }
    });
  });
});

// form1 validation

$(document).ready(function () {
  $("#myForm").submit(function (event) {
    event.preventDefault();

    var email = $("#emailid").val();
    var password = $("#password").val();
    var emailRegex = /^(([^<>()[\]\.,;:@\"]+(\.[^<>()[\]\.,;:@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:@\"]+\.)+[^<>()[\]\.,;:@\"]{2,})$/i;

    $(".error").empty();

    $('#btn4').click(function () {

    });

    if (email === "") {
      $("#emailError").text("Email cannot be blank");
    }
    else if (!emailRegex.test(email)) {
      $("#emailError").text("Invalid email format");
    }
    if (password === "") {
      $("#passwordError").text("Password cannot be blank");
    }
    else if (password.length < 6) {
      $("#passwordError").text("Password must be at least 6 characters long");
    }
    else {
      $('.loder1').css({ 'display': 'block' });
      $('#submit').css({ 'display': 'none' });
      setTimeout(function () {
        var nextPageUrl = "welcome.html";
        window.location.href = nextPageUrl;
        $('.loder1').css({ 'display': 'none'});
        $('#submit').css({ 'display': 'block'});
      }, 2000);
    }
  });
});


// flag---
$(document).ready(function() {
  $('.custom-dropdown').on('click', '.selected-item', function() {
    $(this).siblings('.dropdown-list').toggle();
  });

  $('.custom-dropdown').on('click', 'li', function() {
    var value = $(this).attr('data-value');
    var flagSrc = $(this).find('.flag-icon').attr('src');
    var countryCode = $(this).find('span').text();

    $(this).parent().siblings('.selected-item').find('.flag-icon').attr('src', flagSrc);
    $(this).parent().siblings('.selected-item').find('.country-code').text(countryCode);
    $(this).parent().siblings('.selected-item').siblings('input.phonetext').val(value);

    $(this).parent().hide();

  });
});