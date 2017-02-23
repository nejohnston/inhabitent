<?php
/**
* The template for displaying the footer.
*
* @package RED_Starter_Theme
*/

?>
<!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container footer-info">
				<div class="footer-block-item">
					<h3 class="footer-header">Contact Info</h3>
					<p><i class="fa fa-envelope"></i><a class="footer-link" href="mailto: info@inhabitent.com">info@inhabitent.com</a></p>
					<p><i class="fa fa-phone"></i><a class="footer-link" href="tel:1432412341234">604-456-7891</a></p>
					</div>
					<div class="footer-block-item">
					<h3 class="footer-header">Business Hours</h3>
					<p>Monday to Friday: 9am to 5pm</p>
					<p>Saturday: 10am to 2pm</p>
					<p>Sunday: Closed</p>
					</div>
					<div class="footer-block-item">
						<div class="text-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text.svg" alt="Image of Inhabitent logo" />
					</div>
					</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	<?php wp_footer(); ?>

</body>
</html>
