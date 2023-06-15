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