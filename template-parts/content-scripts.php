<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
  $(function() {
    $('.stickem-container').stickem({ offset: 0 });
	var sticky = $('.container').stickem();
	sticky.destroy();
  });
  $(window).load(function(){
  $(".twentytwenty-container").twentytwenty({
    default_offset_pct: 0.5, // How much of the before image is visible when the page loads
    orientation: 'horizontal' // Orientation of the before and after images ('horizontal' or 'vertical')
  });
});
</script>