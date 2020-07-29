( function ( $ ) {

$(document).ready(function(){

  // Slide Down Navigation
  var lastDirection = 0;
  var nav = $(".theme-g-nav");

  $(window).on('scroll', function() {
      w = $(this).scrollTop();

      if(w > 200) {
        nav.addClass('nav-solid');
      }

      if(w < 200) {
        nav.removeClass('nav-solid');
      }

      if(w < lastDirection) {
          console.log('up 1');
          nav.removeClass('nav-hidden').addClass("nav-visible");
          navAnim.play()
      }

      else if(w > lastDirection && w > 200) {
          console.log('down 1');
          nav.removeClass("nav-visible").addClass('nav-hidden');
          navAnim.reverse()
      }

      lastDirection = w;
  });

  var navAnim = new TimelineLite({paused:true});
  navAnim.to(".theme-g-nav", 1, {ease:Back.easeOut});

  // Mobile Toggle

  var mobileBtn = $('.theme-mobile-btn');
  var mobilePanel = $('.theme-mobile-nav-panel');

  mobileBtn.on('click', function(){
    mobileBtn.toggleClass('is-active');
    mobilePanel.toggleClass('theme-mobile-nav-panel-active');
  });

});

} ) (jQuery);
