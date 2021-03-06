<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/page-header', get_post_format() ); ?>

	<div class="site-about-us-content">

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

		<div class="row">

			<div class="col-sm-12 col-md-12 col-lg-6">
				<h2> <?php the_field('city_name'); ?> </h2>
				<p> <?php the_field('find_us'); ?> </p>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6">
				<?php the_field('the_map'); ?>
			</div>

		</div>

	</div>

<?php
get_sidebar();
get_footer();