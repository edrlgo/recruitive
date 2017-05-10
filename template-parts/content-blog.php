<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Recruitive2.0
 */

?>

<style>

	.blog-row {
		clear: both;
	}

	.blog-left {
		width: 50%;
		float: left;
	}

	.blog-feed {
		margin: 0 !important;
	}
	
	.blog-container {
		position: relative;
	}


	.blog-title {
		position: absolute;
		bottom: 50px;
		left: 50px;
		margin: 0;
		
	}

	.blog-title a {
		color: white;
		text-decoration: underline;
		padding: 0;
		margin: 0	;
	}

</style>

<article class="blog-feed" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-header blog-container">

		<?php the_post_thumbnail('full', array('class' => 'bg-img')); ?>

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h1 class="entry-title blog-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;

		if ( 'post' === get_post_type() ) : ?> 
		<?php
		endif; ?>

	</div><!-- .entry-header -->

</article><!-- #post-## -->
