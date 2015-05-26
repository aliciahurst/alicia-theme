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
</script>