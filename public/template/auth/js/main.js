(function($) {
  "use strict";

  // Remove preload class once page is fully loaded

  $(window).on('load', function() {
    $('body').removeClass('preload');
  });

  // Add class to navigation when scrolling down

  $(window).on('scroll', function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 20) {
      $('.header-main').addClass('fade-in');
    } else {
      $('.header-main').removeClass('fade-in');
    }
  });

  // Add class when mobile navigation icon is clicked

  $('.nav-toggle').on('click', function() {
    $('body').toggleClass('no-scroll');
    $('.header-main').toggleClass('active');
  });

  // Prevent background from scrolling on mobile when navigation is toggled

  $('html, body').on('touchmove', function() {
    e.preventDefault();
  });

})(jQuery);