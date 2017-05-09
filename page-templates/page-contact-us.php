<?php /* Template Name: Contact Page v2 */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area flexcenter">
		<div class="site-header-content">
			<h1> <?php the_field('rubrik'); ?> </h1>
			<p> <?php the_field('content_under'); ?> </p>
		</div>
	</div>

	<div class="the-content">

		<?php if( have_rows('contact_row') ): the_row(); ?>
		
		<div class="row">

				<?php while( have_rows('contact_row') ): ?>

				<div class="col-sm-12 col-lg-3">
					<?php get_template_part( 'template-parts/about-us', get_post_format() ); ?>
				</div>

				<?php endwhile; ?>

		</div>

		<?php endif; ?>

	</div>

<?php
get_sidebar();
get_footer();