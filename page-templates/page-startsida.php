<?php /* Template Name: Startsida */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area flexcenter">
		<div class="site-index-header-content">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h1> <?php the_field('stor-rubrik'); ?> </h1>
					<p> <?php the_field('stor-content_under'); ?> </p>
				</div>
				<div class="col-sm-12 col-md-6">
					<h2 class="job-header"> <?php the_field('liten-rubrik'); ?> </h2>
					<!-- SENASTE JOBBEN -->
				</div>
			</div>
		</div>
	</div>
	<div class="the-content margin-bot flexcenter">
	
			<h2> <?php the_field('mellan-rubrik') ?> </h2>
			<!-- NYHETER -->

		</div>

<?php
get_sidebar();
get_footer();