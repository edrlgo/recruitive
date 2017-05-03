<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Recruitive2.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer flex-container" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4">
					<?php dynamic_sidebar('footer-area-1'); ?>
				</div>
				<div class="col-sm-12 col-md-4">
					<?php dynamic_sidebar('footer-area-2'); ?>
				</div>
				<div class="col-sm-12 col-md-4">
					<?php dynamic_sidebar('footer-area-3'); ?>
				</div>
			</div>
		<!--<p class="footer-copyright">&copy; 2016-<?php echo date("Y"); ?> Recruitive AB. All Rights Reserved.</p>-->
		</div>
		<!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="btn-group btn-block fixed" role="group">
	<a href="#" type="button" class="btn btn-jobb">Lediga jobb</a>
	<a href="#" type="button" class="btn btn-cv">Sök jobb utan CV</a>
	<a href="#" type="button" class="btn btn-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	<a href="#" type="button" class="btn btn-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</div>

<?php wp_footer(); ?>

</body>
</html>
