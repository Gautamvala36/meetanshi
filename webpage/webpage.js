$(document).ready(function(){
  $(".child-cat-ul").hide();
  $(".sub-cat-li").on('click', function(){
      $(this).children(".child-cat-ul").show();
  })
  $(".sub-cat-li").on('mouseleave', function(){
      $(this).children(".child-cat-ul").hide();
  })
  
});

$(document).ready(function() {
  // Toggle submenus
  $('.shop-btn').siblings('.dropdown-content').hide();
  $('.shop-btn').click(function(e) {
    e.stopPropagation();
    $(this).siblings('.dropdown-content').slideToggle();
    $(this).children('.fa-solid').toggleClass('fa-caret-up');
    
  });
  
  // Toggle child submenus
  $('.dropdown-content2').hide();
  $('.fa-caret-down').click(function() {
    $(this).siblings('.dropdown-content2').slideToggle();
      $(this).toggleClass("rotate");
  });

  $('.line').click(function(e) {
    e.stopPropagation();
    $(this).parents('.nav-top').siblings('.bot-nav').css({"transform":"translateX(0%)"});
    
  });
  $('.fa-xmark').click(function(e) {
    e.stopPropagation();
    $(this).parents('.bot-nav').css({"transform":"translateX(-110%)"});
    
  });
});
$(document).ready(function () {

$('.ab2').on('click', function () {
    var parentToggle = $(this).siblings('.ullist').slideDown();
    $('.ullist').not(parentToggle).removeClass('open').slideUp();
    parentToggle.toggleClass('open');
});
$(document).ready(function () {
    $('.ab2').on('click', function () {
        $(this).children('.fa-angle-down').toggleClass('fa-angle-up');
        
    })
});
});