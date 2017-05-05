<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area flexcenter">
		<div class="site-header-content">
			<h1> <?php the_field('rubrik'); ?> </h1>
			<p> <?php the_field('content_under'); ?> </p>
		</div>
	</div>
	<div class="row flexcenter">
			<div class="col-sm-12 col-lg-4">
				<?php get_template_part( 'template-parts/about-us', get_post_format() ); ?>
			</div>
	</div>

<?php
get_sidebar();
get_footer();