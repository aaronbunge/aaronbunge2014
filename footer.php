<?php

	/**
	 * Footer
	 *
	 * AARON BUNGE DESIGN
	 *
	 * 
	 * @package aaronbunge
	 * @since Aaron Bunge Design 1.0
	 */
	 
?>

<!-- footer -->
	<div class="container">
		<div class="one column">
			<div id="footer">
				<div id="copyright">
					<h5>© 2014 aaron bunge design. made with ♥ in brooklyn.</h5>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<!-- scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
			$('#mobile-icon').click(function(){
				$('nav').slideToggle();
				return false;
			});
		</script>
		<?php if ( is_single( 'l2-data-visualization' ) ) : ?>
		<!-- Fancybox -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.fancybox').fancybox();
			});
		</script>
		<!-- Isotope -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
		<script type="text/javascript">
			var $container = $('#iso-content').imagesLoaded( function() {
			  $container.isotope({
			    // options
			    itemSelector: '.item',
			    layoutMode: 'masonry'
			  });
			});
		</script>
		<?php endif; ?>
	</footer>
</body>
</html>