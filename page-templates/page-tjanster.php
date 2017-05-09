<?php /* Template Name: Tjänster */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area flexcenter">
		<div class="site-header-content">
			<h1> <?php the_field('rubrik'); ?> </h1>
			<p> <?php the_field('content_under'); ?> </p>
		</div>
	</div>

	<div class="the-content">
		<ul id="fast-links-menu">
			<li>Snabblänk:</li>
			<li><a href="#" class="fast-link"> <?php the_field('link-1'); ?> </a></li>
			<li><a href="#" class="fast-link"> <?php the_field('link-2'); ?> </a></li>
			<li><a href="#" class="fast-link"> <?php the_field('link-3'); ?> </a></li>
			<li><a href="#" class="fast-link"> <?php the_field('link-4'); ?> </a></li>
			<li><a href="#" class="fast-link"> <?php the_field('link-5'); ?> </a></li>
			<li><a href="#" class="fast-link"> <?php the_field('link-6'); ?> </a></li>
		</ul>
	</div>

	<div class="site-tjanster-boxes flex-container">
		<div class="row">
			<div class="col-sm-12 col-lg-6">
				<div id="box-1" class="tjanster-box">
						<h3 class="tjanster-header"> <?php the_field('link-1'); ?> </h3>

						<p class="tjanster-content"> <?php the_field('content-1') ?> </p>
					</div>
				</div>
			<div class="col-sm-12 col-lg-6">
				<div id="box-2" class="tjanster-box">
					<h3 class="tjanster-header"> <?php the_field('link-2'); ?> </h3>

					<p class="tjanster-content"> <?php the_field('content-2') ?> </p>
				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-sm-12 col-lg-6">
				<div id="box-3" class="tjanster-box">
					<h3 class="tjanster-header"> <?php the_field('link-3'); ?> </h3>

					<p class="tjanster-content"> <?php the_field('content-3') ?> </p>
				</div>
			</div>
			<div class="col-sm-12 col-lg-6">
				<div id="box-4" class="tjanster-box">
					<h3 class="tjanster-header"> <?php the_field('link-4'); ?> </h3>

					<p class="tjanster-content"> <?php the_field('content-4') ?> </p>
				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-sm-12 col-lg-6">
				<div id="box-5" class="tjanster-box">
					<h3 class="tjanster-header"> <?php the_field('link-5'); ?> </h3>

					<p class="tjanster-content"> <?php the_field('content-5') ?> </p>
				</div>
			</div>
			<div class="col-sm-12 col-lg-6">
				<div id="box-6" class="tjanster-box">
					<h3 class="tjanster-header"> <?php the_field('link-6'); ?> </h3>

					<p class="tjanster-content"> <?php the_field('content-6') ?> </p>
				</div>
			</div>	
		</div>
	</div>

<?php
get_sidebar();
get_footer();