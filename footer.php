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
				<div class="col-sm-4">
					<h4 class="footer-header">Kontakt</h4>
					<p class="footer-content">Ibland vill man prata med en människa. Hör av dig!</p>
					<a href="#" class="btn btn-footer">Gå vidare</a>
				</div>
				<div class="col-sm-4">
					<h4 class="footer-header">Du hittar oss på</h4>
					<ul class="footer-list">
						<li><a href="#" class="footer-link">LinkedIn</a></li>
						<li><a href="#" class="footer-link">Instagram</a></li>
						<li><a href="#" class="footer-link">Facebook</a></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<h4 class="footer-header">Företagsinformation</h4>
					<p class="footer-content">Recruitive AB<br />
					<a href="tel:0868442100" class="footer-link">08-684 42 100</a><br />
					<a href="mailto:info@recruitive.se" class="footer-link">info@recruitive.se</a></p>
				</div>
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
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
