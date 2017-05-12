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

	.blogpost-container {
		width: 100%;
		height: 65vh;
		background-size: cover;
		background-position: center;
		overflow: hidden;
		background-repeat: no-repeat;
	}

	.blog-content {
	    width: 90%;
	    height: auto;
	    position: absolute;
	    left: 50px;
	    bottom: 50px;
	}

	.blog-content h1 {
		padding:0px;
		margin:0px;
		text-decoration: underline;
	}

	.blog-content h1 a {
		color: white;
	}

	.blogpost-link {
		width: 100%;
		height: 100%;
	}

</style>


		<div class="col-sm-12 col-md-6 col-lg-6 no-m">

			<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
			<!-- Hämtar featured image -->
			
				<div class="blogpost-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $backgroundImg[0]; ?>');">

					<div class="blog-content">
						
						<?php the_title( '<h1><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
					
					</div><!-- .entry-header -->

				</div><!-- #post-## -->
			</a>

		</div><!-- COL -->


