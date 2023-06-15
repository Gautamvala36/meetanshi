// Create New Account Validation
$(document).ready(function() {
   
    $('#checkc').on('click', function() {
        var passwordField = $(this).parent('.check').siblings('.abps').children('#password');
        if (passwordField.attr('type')=='password') {
          passwordField.attr('type', 'text');
        } else {
          passwordField.attr('type', 'password');
        }
      });

  $('.reg_btn').click(function(){
     var otpbox1 = $("#otpbox1").val();
    
     if(otpbox1=='')
     {
      console.log('erorrrrrrrrrrrrrrrrrrr');
        $("#otperror").text("Please Enter OTP");
     }
     else if(otpbox1=='123456')
     {
            
            $('.loder2').css({'display':'block'});
            $('.reg_btn').css({'display':'none'});
      setTimeout(function() {
          var nextPageUrl = "welcome.html";
          window.location.href = nextPageUrl;
            $('.loder2').css({'display':'none'});
            $('.reg_btn').css({'display':'block'});
           
        }, 2000);
     }
  });

  $("#btn1").click(function(event) {
    event.preventDefault(); 
    
    var firstName = $("#firstName").val();
    var lastName = $("#Lastname").val();
    var email = $("#emailAddress").val();
    var password = $("#password").val();
    var nameRegex = /^[A-Za-z]+$/;
    var emailRegex = /^(([^<>()[\]\.,;:@\"]+(\.[^<>()[\]\.,;:@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:@\"]+\.)+[^<>()[\]\.,;:@\"]{2,})$/i;

    $(".error").empty();
    
    if (firstName === "") {
      $("#firstNameError").text("First name cannot be blank");
 
    }
    
    else if (!nameRegex.test(firstName)) {
      $("#firstNameError").text("First name can only contain alphabets");
      
    }
    
    if (lastName === "") {
      $("#lastNameError").text("Last name cannot be blank");
      
    }
    
    else if (!nameRegex.test(lastName)) {
      $("#lastNameError").text("Last name can only contain alphabets");
      
    }
    
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
    else
    {
                $('.loder1').css({'display':'block'});
                $('#btn1').css({'display':'none'});
        setTimeout(function() {
        // $('.Verify').css({'display':'block'});
                $('.loder1').css({'display':'none'});
                $('#btn1').css({'display':'block'});
                $('input[value="SEND OTP"]').val('RESEND OTP');
                $('.otpbox').css({'display':'block'});
            }, 2000);
         
    }
  });
});

//   const countries = [
//     { code: '+91', flag: 'flag.png' },
//     { code: '+93', flag: 'united-kingdom.png' },
//     { code: '+95', flag: 'united-states-of-america.png' },
//     // Add more countries and their flag URLs here
//   ];
  
//   document.addEventListener('DOMContentLoaded', function() {
//     const countrySelect = document.getElementById('countrySelect');
  
//     // Populate the dropdown with country flags and codes
//     countries.forEach(function(country) {
//       const option = document.createElement('option');
//       option.style.backgroundImage = `url(${country.flag})`;
//       console.log('erroe');
//       option.value = country.code;
//       option.style.backgroundSize = 'contain';
//       option.style.backgroundRepeat = 'no-repeat';
//       option.style.backgroundPosition = 'center left';
//       option.style.paddingLeft = '';
//       option.textContent = country.code;
//       countrySelect.appendChild(option);
//     });
//   });
  


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
