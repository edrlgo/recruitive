<?php /* Template Name: Startsida */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area">

		<div class="site-index-header-content">
	
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-sm-12 col-md-5 flexcenter site-index-job-bg">
				
				<div class="site-index-jobs">

					<h2 class="job-header"> <?php the_field('liten-rubrik'); ?> </h2>
						
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

				</div><!-- site-index-jobs -->

			</div><!-- COL 4 -->

			<?php $index_bild = get_field('site-index-bild'); ?> 

			<div class="col-sm-12 col-md-7 site-index-bg flexcenter" style="background: linear-gradient(rgba(64, 64, 64, 0.5), rgba(64, 64, 64, 0.2)), url(<?php echo $index_bild['url']; ?>)">
				
				<div class="site-index-header">
					
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

				</div><!-- site-index-header -->

			</div><!-- COL 7 -->

		</div><!-- row -->

	</div><!-- container-fluid -->	

</div><!-- site-index-header-content -->

<div class="padding-75"></div>

	<?php get_template_part( 'template-parts/news-boxes', get_post_format() ); ?>


	</div>

<?php
get_sidebar();
get_footer();