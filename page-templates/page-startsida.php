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
					<?php $bild = get_sub_field('index-bild'); ?>
					<div class="site-index-header" style="background-image: url(<?php echo $bild['index-bild'] ?>)">

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
	<div class="site-index-news-content">
	
		<h2> <?php the_field('mellan-rubrik') ?> </h2>
			
		<?php get_template_part( 'template-parts/news-boxes', get_post_format() ); ?>

		<div class="padding-50"></div>

		<div class="flexcenter">

			<a class="btn btn-red" href="<?php the_field('news-link') ?>"> <?php the_field('more-news') ?> </a>

		</div>

	</div>

<?php
get_sidebar();
get_footer();