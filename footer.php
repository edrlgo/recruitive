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
	<div class="padding-75"></div>
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
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<p class="footer-copyright">&copy; 2016-<?php echo date("Y"); ?> Recruitive AB. All Rights Reserved.</p>
					
					<div class="coop-logos">

						<h3>Medlemmar i:</h3>
						<div class="coop-logo-2">
							
							<a href="#" target="_blank"><img src="http://localhost:8888/bravaro/wp-content/uploads/2017/06/bemanning-high.png"/></a>

						</div>
						<div class="coop-logo-1">
							 
							<a href="#" target="_blank"><img src="http://localhost:8888/bravaro/wp-content/uploads/2017/06/SN_Logo.png"/></a>

						</div>
					</div> <!-- coop-logos -->
				</div>
			</div>
		</div>
		<!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<div class="btn-group btn-block fixed margin-btn" role="group">
	<a href="#" type="button" class="btn btn-jobb">Lediga jobb</a>
	<a href="#" type="button" class="btn btn-cv">Sök jobb utan CV</a>
	<a href="https://www.linkedin.com/company/recruitive-staffing-&-recruiting?trk=ppro_cprof" type="button" class="btn btn-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	<a href="https://www.instagram.com/recruitive/" type="button" class="btn btn-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</div>

<?php wp_footer(); ?>

</body>
</html>
