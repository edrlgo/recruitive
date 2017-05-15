<div class="container-fluid">

	<?php

	if (have_rows('tjanster')) :

	?>

	<ul id="fast-links-menu">

		<li>Snabblänk:</li>

		<?php

		while (have_rows('tjanster')) : the_row();

		?>

		<li><a href="<?php the_sub_field('link-1-url'); ?>" class="fast-link"> <?php the_sub_field('link-1'); ?> </a></li>
		<li><a href="<?php the_sub_field('link-2-url'); ?>" class="fast-link"> <?php the_sub_field('link-2'); ?> </a></li>

		<?php endwhile; ?>

	</ul>

	<?php endif; ?>

</div>

<div class="the-content">

	<?php

	if (have_rows('tjanster')) :

	?>

	<div class="container-fluid">

		<?php

		while (have_rows('tjanster')) : the_row();

		?>

		<div class="row">

				<div class="col-sm-12 col-lg-6">
					<div id="box-1" class="tjanster-box">
						<h3 class="tjanster-header"> <?php the_sub_field('link-1'); ?> </h3>

						<p class="tjanster-content"> <?php the_sub_field('content-1') ?> </p>
					</div>
				</div>

				<div class="col-sm-12 col-lg-6">
					<div id="box-2" class="tjanster-box">
						<h3 class="tjanster-header"> <?php the_sub_field('link-2'); ?> </h3>

						<p class="tjanster-content"> <?php the_sub_field('content-2') ?> </p>
					</div>
				</div>	

		</div>

		<?php endwhile; ?>

	</div>

	<?php endif; ?>

</div>

<div class="padding-50"></div>