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

		$i = 0;

		$people = get_sub_field('contact_person');  /* räkna antal personer */

		if( have_rows('contact_person') ): ?>

		<div class="row">

		<?php while( have_rows('contact_person') ): the_row();

		$contacts = count($people);

		?>
		
		<?php if ($i % 4 == 0 && $i > 0) { ?>
		</div>
		<div class="row">
		<?php } ?>

				<div class="col-sm-12 col-lg-3">
					<?php get_template_part( 'template-parts/contact-person', get_post_format() ); ?>
				</div>

		<?php 

		$i++;

		endwhile;

		endif;

		?>

		</div>

	</div>

<?php
get_sidebar();
get_footer();