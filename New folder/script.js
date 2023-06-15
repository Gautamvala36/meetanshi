$(document).ready(function () {
  $(".register-new-customer").on("click", function () {
    $(location).prop("href", "index2.html");
  });
  $(".pass").on("click", function () {
    $(this).siblings(".otp").removeClass("btn-active");
    $(this).addClass("btn-active");
    $(this).parent(".btn-otp-pass").siblings(".login-form").show();
    $(this).parent(".btn-otp-pass").siblings(".otp-form").hide();
  });
  $(".otp").on("click", function () {
    $(this).siblings(".pass").removeClass("btn-active");
    $(this).addClass("btn-active");
    $(this).parent(".btn-otp-pass").siblings(".otp-form").show();
    $(this).parent(".btn-otp-pass").siblings(".login-form").hide();
  });
  $("i.fa-eye-low-vision").on("click", function () {
    var ps = $(this).siblings("#password");
    if (ps.attr("type") == "password") {
      ps.attr("type", "text");
    } else {
      ps.attr("type", "password");
    }
  });
  $("#shwpass").on("click", function () {
    var pss = $(this)
      .parent(".showpassword-wrapper")
      .siblings(".password-wrapper")
      .children("#password");
    if (pss.attr("type") == "password") {
      pss.attr("type", "text");
    } else {
      pss.attr("type", "password");
    }
  });
  $(".Shw-text").on("click", function () {
    var pss = $(this)
      .parent(".showpassword-wrapper")
      .siblings(".password-wrapper")
      .children("#password");
    if (pss.attr("type") == "password") {
      pss.attr("type", "text");
    } else {
      pss.attr("type", "password");
    }
  });
});
$(document).ready(function () {
  $(".selected-item").click(function () {
    $(this).siblings(".dropdown-list").toggle();
  });

  $(".dropdown-list li").click(function () {
    var countryCode = $(this).data("value");
    var flagUrl = $(this).find("img").attr("src");

    $(".selected-item .flag-icon").css(
      "background-image",
      "url(" + flagUrl + ")"
    );
    $(".selected-item .country-code").text(countryCode);
    $(".dropdown-list").hide();
  });
});