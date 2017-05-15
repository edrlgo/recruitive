<?php /* Template Name: Tjänster */ ?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/page-header', get_post_format() ); ?>

	<div class="container-fluid">

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

	</div>

	<div class="the-content">

		<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 no-m">

						<div class="box-content flexcenter" style="background-image: url(<?php the_field('bild_1'); ?>)">

							<div class="box-innercontent">
								
								<h3><?php the_field('link-1'); ?></h3>

								<p><?php the_field('content-1') ?></p>

							</div>

						</div>

					</div> <!-- COL -->

					<div class="col-sm-12 col-md-6 col-lg-6 no-m">

						<div class="box-content flexcenter" style="background-image: url(<?php the_field('bild_2'); ?>)">

							<div class="box-innercontent">
								
								<h3><?php the_field('link-2'); ?></h3>

								<p><?php the_field('content-2') ?></p>

							</div>

						</div>

					</div> <!-- COL -->

				</div><!-- ROW -->

				<div class="row">

					<div class="col-sm-12 col-md-6 col-lg-6 no-m">

						<div class="box-content flexcenter" style="background-image: url(<?php the_field('bild_3'); ?>)">

							<div class="box-innercontent">
								
								<h3><?php the_field('link-3'); ?></h3>

								<p><?php the_field('content-3') ?></p>

							</div>

						</div>


					</div> <!-- COL -->

					<div class="col-sm-12 col-md-6 col-lg-6 no-m">

						<div class="box-content flexcenter" style="background-image: url(<?php the_field('bild_4'); ?>)">

							<div class="box-innercontent">
								
								<h3><?php the_field('link-4'); ?></h3>

								<p><?php the_field('content-4') ?></p>

							</div>

						</div>


					</div> <!-- COL -->

				</div> <!-- ROW -->

				<div class="row">

					<div class="col-sm-12 col-md-6 col-lg-6 no-m">

						<div class="box-content flexcenter" style="background-image: url(<?php the_field('bild_5'); ?>)">

							<div class="box-innercontent">
								
								<h3><?php the_field('link-5'); ?></h3>

								<p><?php the_field('content-5') ?></p>

							</div>

						</div>


					</div> <!-- COL -->

					<div class="col-sm-12 col-md-6 col-lg-6 no-m">

						<div class="box-content flexcenter" style="background-image: url(<?php the_field('bild_6'); ?>)">

							<div class="box-innercontent">
								
								<h3><?php the_field('link-6'); ?></h3>

								<p><?php the_field('content-6') ?></p>

							</div>

						</div>


					</div> <!-- COL -->

				</div> <!-- ROW -->

			</div>
	</div>

<?php get_template_part( 'template-parts/tjanster-boxes', get_post_format() ); ?>

<?php
get_sidebar();
get_footer();