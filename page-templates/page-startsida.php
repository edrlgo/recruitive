<?php /* Template Name: Startsida */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area flexcenter">
		<div class="site-index-header-content">
			<div class="row">

				<div class="col-sm-12 col-md-4">
					<div class="site-index-jobs">

						<h2 class="job-header"> <?php the_field('liten-rubrik'); ?> </h2>
						<!--<iframe id="jobadlist" width="620" height="400" scrolling="no" src="http://cv-recruitive-se.app.intelliplan.eu/JobAd/ShortList?class=nomasterpage&top=4"></iframe>-->
						<div class="jobadgrouplistitemcontainer">
							<span class="jobadgrouplistitemsubject">
								Kundtjänstpersonal till Klarna
							</span>
						</div>

						<div class="jobadgrouplistitemcontainer">
							<span class="jobadgrouplistitemsubject">
								Kundtjänstpersonal till Klarna
							</span>
						</div>

						<div class="jobadgrouplistitemcontainer">
							<span class="jobadgrouplistitemsubject">
								Kundtjänstpersonal till Klarna
							</span>
						</div>

						<div class="jobadgrouplistitemcontainer">
							<span class="jobadgrouplistitemsubject">
								Kundtjänstpersonal till Klarna
							</span>
						</div>
		
					</div>
				</div>

				<div class="col-sm-12 col-md-8">
					<?php $index_bild = get_field('site-index-bild'); ?>
					<div class="site-index-header" style="background-image: url(<?php echo $index_bild['url']; ?>)">
						<h1> <?php the_field('stor-rubrik'); ?> </h1>
						<p> <?php the_field('stor-content_under'); ?> </p>
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-4">
								<a class="btn btn-red btn-startsida" href=" <?php the_field('startsida-link-1'); ?>">
									<?php the_field('startsida-link-1-text'); ?>
								</a>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-4">
								<a class="btn btn-red btn-startsida" href=" <?php the_field('startsida-link-2'); ?>">
									<?php the_field('startsida-link-2-text'); ?>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php
get_sidebar();
get_footer();