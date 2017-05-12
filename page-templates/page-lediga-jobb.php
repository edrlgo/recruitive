<?php /* Template Name: Lediga jobb */ ?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/page-header', get_post_format() ); ?>

	<div class="the-content flexcenter">
		<iframe width="100%" height="400px" scrolling="no" src="https://cv-recruitive-se.app.intelliplan.eu/JobAd/GroupList">
		</iframe>
	</div>

<?php
get_sidebar();
get_footer();