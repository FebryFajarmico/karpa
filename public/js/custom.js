(function($) {
  //jQuery to collapse the navbar on scroll
  $(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
      $("#mainNav").addClass("top-nav-collapse");
    } else {
      $("#mainNav").removeClass("top-nav-collapse");
    }
  });

})(jQuery);
