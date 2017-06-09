<?php /* Template Name: Startsida */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area flexcenter">
		<div class="site-index-header-content">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div id="site-index-header">
						<h1> <?php the_field('stor-rubrik'); ?> </h1>
						<p> <?php the_field('stor-content_under'); ?> </p>
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6">
								<a class="btn btn-red btn-startsida" href=" <?php the_field('startsida-link-1'); ?>">
									<?php the_field('startsida-link-1-text'); ?>
								</a>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6">
								<a class="btn btn-red btn-startsida" href=" <?php the_field('startsida-link-2'); ?>">
									<?php the_field('startsida-link-2-text'); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="site-index-jobs">
						<h2 class="job-header"> <?php the_field('liten-rubrik'); ?> </h2>
						<iframe id="jobadlist" width="620" height="400" scrolling="no" src="http://cv-recruitive-se.app.intelliplan.eu/JobAd/ShortList?class=nomasterpage&top=4"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="site-index-news-content">
	
			<h2> <?php the_field('mellan-rubrik') ?> </h2>
			
			<div class="the-content margin-bot">
			<!-- NYTHETER -->
			</div>

	</div>

<?php
get_sidebar();
get_footer();