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

	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
			<!-- Hämtar featured image -->
	<div class="ft-img" style="background: linear-gradient(rgba(64, 64, 64, 0.5), rgba(64, 64, 64, 0.2)), url('<?php echo $backgroundImg[0]; ?>');">
		
		<div class="blog-title flexblog">
			<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) : ?>
		<?php
		endif; ?>

			<div class="entry-meta aligner-item--bottom">
			<?php recruitive_ab_posted_on(); ?>
			</div><!-- .entry-meta -->

		</div> <!-- blog title -->


	</div>

	<div class="padding-50"></div>

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

</article><!-- #post-## -->

	<div class="padding-50"></div>

		<div class="relatedposts">
		<?php $orig_post = $post;
		global $post;
		$tags = wp_get_post_tags($post->ID);
		if ($tags) {
		$tag_ids = array();
		foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
		$args=array(
		'tag__in' => $tag_ids,
		'post__not_in' => array($post->ID),
		'posts_per_page'=>3, // Number of related posts that will be shown.
		'caller_get_posts'=>1
		);
		$my_query = new wp_query( $args );
		if( $my_query->have_posts() ) {
		echo '<h3>Läs även</h3><div class="row">';
		while( $my_query->have_posts() ) {
		$my_query->the_post(); 
		$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
		?>
		<div class="col-sm-12 col-md-4 col-lg-4 rl-p" style="background: linear-gradient(rgba(64, 64, 64, 0.5), rgba(64, 64, 64, 0.2)), url('<?php echo $backgroundImg[0]; ?>');"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"></a>
		<div class="relatedcontent">
		<h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		</div>
		</div>


		<? }
		echo '</div>';
		}
		}
		$post = $orig_post;
		wp_reset_query(); ?>

		</div>

		<div class="padding-50"></div>
