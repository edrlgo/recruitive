<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Recruitive2.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

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
		<div class="col-sm-4 col-md-4 col-lg-4 rl-p" style="background: linear-gradient(rgba(64, 64, 64, 0.5), rgba(64, 64, 64, 0.2)), url('<?php echo $backgroundImg[0]; ?>');"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"></a>
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
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
