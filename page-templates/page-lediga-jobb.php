<?php /* Template Name: Lediga jobb */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area flexcenter">
		<div class="site-header-content">
			<h1> <?php the_field('rubrik'); ?> </h1>
			<p> <?php the_field('content_under'); ?> </p>
		</div>
	</div>

	<div class="the-content flexcenter">
		<iframe width="100%" height="400px" scrolling="no" src="https://cv-recruitive-se.app.intelliplan.eu/JobAd/GroupList">
		</iframe>
	</div>

<?php
get_sidebar();
get_footer();