<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
  $(function() {
    $('.stickem-container').stickem({ offset: 170 });
	var sticky = $('.container').stickem();
	sticky.destroy();
  });


</script>