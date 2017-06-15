<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Recruitive2.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="flexcenter entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) : ?>
		<?php
		endif; ?>
		
	</header><!-- .entry-header -->

	<div class="entry-meta">
			<?php recruitive_ab_posted_on(); ?>
	</div><!-- .entry-meta -->

	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
			<!-- Hämtar featured image -->
	<div class="parallax-window" data-speed="0.5" data-position="center" data-z-index="2" data-bleed="10" data-parallax="scroll" data-image-src="<?php echo $backgroundImg[0]; ?>"></div>

	<div class="padding-75"></div>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'recruitive-ab' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'recruitive-ab' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php recruitive_ab_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
