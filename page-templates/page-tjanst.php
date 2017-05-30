<?php /* Template Name: Tjänst */ ?>

<?php get_header(); ?>

<div class="page-tjanst-content">

	<h1><?php the_field('rubrik') ?></h1>

	<p><?php the_field('content_under') ?></p>

	<?php if (have_posts()) {
		while (have_posts()) {
			the_post();
			the_content();
		}
	} ?>

</div>

<?php
get_sidebar();
get_footer();