<?php /* Template Name: Tjänster */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area flexcenter">
		<div class="site-header-content">
			<h1> <?php the_field('rubrik'); ?> </h1>
			<p> <?php the_field('content_under'); ?> </p>
		</div>
	</div>

	<div id="the-content">
		<ul id="fast-links">
			<li>Snabblänk:</li>
			<li><a href="#" class="fast-link"> <?php the_field('link-1'); ?> </a>
			<li><a href="#" class="fast-link"> <?php the_field('link-2'); ?> </a>
			<li><a href="#" class="fast-link"> <?php the_field('link-3'); ?> </a>
			<li><a href="#" class="fast-link"> <?php the_field('link-4'); ?> </a>
			<li><a href="#" class="fast-link"> <?php the_field('link-5'); ?> </a>
			<li><a href="#" class="fast-link"> <?php the_field('link-6'); ?> </a>
		</ul>

		<div class="row">
			<div class="col-sm-12 col-lg-6">
				<div id="box-1" class="tjanster-box">
					<h3 class="tjanster-header"> <?php the_field('link-1'); ?> </h3>

					<p class="tjanster-content"> <?php the_field('content-1') ?> </p>
				</div>
			</div>
			<div class="col-sm-12 col-lg-6">
				<div id="box-1" class="tjanster-box">
					<h3 class="tjanster-header"> <?php the_field('link-2'); ?> </h3>

					<p class="tjanster-content"> <?php the_field('content-2') ?> </p>
				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-sm-12 col-lg-6">
				<div id="box-1" class="tjanster-box">
					<h3 class="tjanster-header"> <?php the_field('link-3'); ?> </h3>

					<p class="tjanster-content"> <?php the_field('content-3') ?> </p>
				</div>
			</div>
			<div class="col-sm-12 col-lg-6">
				<div id="box-1" class="tjanster-box">
					<h3 class="tjanster-header"> <?php the_field('link-4'); ?> </h3>

					<p class="tjanster-content"> <?php the_field('content-4') ?> </p>
				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-sm-12 col-lg-6">
				<div id="box-1" class="tjanster-box">
					<h3 class="tjanster-header"> <?php the_field('link-5'); ?> </h3>

					<p class="tjanster-content"> <?php the_field('content-5') ?> </p>
				</div>
			</div>
			<div class="col-sm-12 col-lg-6">
				<div id="box-1" class="tjanster-box">
					<h3 class="tjanster-header"> <?php the_field('link-6'); ?> </h3>

					<p class="tjanster-content"> <?php the_field('content-6') ?> </p>
				</div>
			</div>	
		</div>
	</div>

<?php
get_sidebar();
get_footer();