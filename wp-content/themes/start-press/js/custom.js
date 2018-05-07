(function($) {
  $(document).ready(function() {
    // for hover dropdown menu
    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });

    //Check to see if the window is top if not then display button
    $(window).scroll(function() {
      if ($(this).scrollTop() > 300) {
        $('#scroll-to-top').fadeIn();
      } else {
        $('#scroll-to-top').fadeOut();
      }
    });
    
    //Click event to scroll to top
    $('#scroll-to-top').click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });
  wow = new WOW({
    animateClass: 'animated',
    offset: 100
  });
  wow.init();

  $(window).load(function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(100).css({
      'overflow': 'visible'
    });
  })
})(jQuery);