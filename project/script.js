//  toggle arrrow


jQuery(function($) { // DOM ready and $ alias in scope

  /**
   * Option dropdowns. Slide toggle
   */
  $(".action-link").on('click', function() {
    $(this).toggleClass('is-active').next(".action-box").stop().slideToggle(500);
  });

});