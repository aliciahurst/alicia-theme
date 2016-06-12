  $(function() {
  $("#home-slider").responsiveSlides();
   $("#slider").responsiveSlides({
        auto: false,
        pager: true,
        nav: true,
        speed: 500,
        namespace: "transparent-btns"
      });
 });  

  $(window).load(function(){
  $(".twentytwenty-container").twentytwenty({
    default_offset_pct: 0.5, // How much of the before image is visible when the page loads
    orientation: 'horizontal' // Orientation of the before and after images ('horizontal' or 'vertical')
  });
  $('.ginput_container *').unwrap();
  $('.input_*[value=""]').addClass('empty');
        $('input, textarea, select').keyup(function(){
            if( $(this).val() == ""){
                $(this).addClass("empty");
                $(this).removeClass("filled");
            }else{
                $(this).removeClass("empty");
                $(this).addClass("filled");
            }
        });
});

jQuery(document).ready(function($) {

 $(".medium").focus(function(){
   $(this).parent().addClass("inputbg");
  }).blur(function(){
       $(this).parent().removeClass("inputbg");
  })

});   

$(document).ready(function() {
  
  $(".animsition").animsition({
  
    inClass               :   'fade-in',
    outClass              :   'fade-out',
    inDuration            :    2000,
    outDuration           :    1000,
    linkElement           :   '.animsition-link',
    // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
    loading               :   false,
    loadingParentElement  :   'body', //animsition wrapper element
    loadingClass          :   'animsition-loading',
    unSupportCss          : [ 'animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
    //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    
    overlay               :   false,
    
    overlayClass          :   'animsition-overlay-slide',
    overlayParentElement  :   'body'
  });
});

  jQuery(document).ready(function() {
    var offset = 220;
    var duration = 1000;
    jQuery(window).scroll(function() {
      if (jQuery(this).scrollTop() > offset) {
        jQuery('.top').fadeIn(duration);
      } else {
        jQuery('.top').fadeOut(duration);
      }
    });
 
    jQuery('.top').click(function(event) {
      event.preventDefault();
      jQuery('html, body').animate({scrollTop: 0}, duration);
      return false;
    })
  });

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top +1
        }, 1000);
        return false;
      }
    }
  });
});

$(function($){
  $(document).on("ready", function () {
      var urlHash = window.location.href.split("#")[1];
      $('html,body').animate({
          scrollTop: $('.' + urlHash + ', #' + urlHash +',[name='+urlHash+']').first().offset().top -22
      }, 2000);
  });
 
})(jQuery);