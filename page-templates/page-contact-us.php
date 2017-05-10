<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area flexcenter">
		<div class="site-header-content">
			<h1> <?php the_field('rubrik'); ?> </h1>
			<p> <?php the_field('content_under'); ?> </p>
		</div>
	</div>

	<div class="the-content">

		<?php 

		if( have_rows('contact_row') ): 

		while( have_rows('contact_row') ): the_row();

		?>
		
		<div class="row">

				<?php

				$people = get_sub_field('contact_person');  /* räkna antal personer */

				if( have_rows('contact_person') ) :

				while( have_rows('contact_person') ): the_row();

				$count = 12 / count($people); /* dela med antal personer */

				?>

				<div class="col-sm-12 col-lg-<?php echo $count; ?>">
					<?php get_template_part( 'template-parts/contact-person', get_post_format() ); ?>
				</div>

				<?php

				endwhile;

				endif;

				?>

		</div>

		<?php 

		endwhile;

		endif;

		?>

	</div>

<?php
get_sidebar();
get_footer();