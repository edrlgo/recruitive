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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'recruitive-ab' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'recruitive-ab' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'recruitive-ab' ), 'recruitive-ab', '<a href="https://automattic.com/" rel="designer">Håkan-Filip Swahn & Emilio Rantanen Lopez</a>' ); ?>
		</div><!-- .site-info -->
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
