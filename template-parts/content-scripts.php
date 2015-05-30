<script>
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

$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

$(document).ready(function() {
    $('html, body').hide();

    if (window.location.hash) {
        setTimeout(function() {
            $('html, body').scrollTop(0).show();
            $('html, body').animate({
                scrollTop: $(window.location.hash).offset().top
                }, 1000)
        }, 0);
    }
    else {
        $('html, body').show();
    }
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

</script>