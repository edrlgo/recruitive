<div class="container-fluid">

	<?php

	$i = 0;

	if (have_rows('tjanster')) :

	?>

	<ul id="fast-links-menu">

		<?php

		while (have_rows('tjanster')) : the_row();

		?>

		<li><a href="<?php the_sub_field('link-url'); ?>" class="fast-link"> <?php the_sub_field('link'); ?> </a></li>

		<?php endwhile; ?>

	</ul>

	<?php endif; ?>

</div>

<div class="the-content">

	<?php

	if (have_rows('tjanster')) :

	?>

	<div class="container-fluid">

		<div class="row">

				<?php

				while (have_rows('tjanster')) : the_row();

				/* gör en ny rad på varannan box */
				if ($i % 2 == 0 && $i > 0) { ?>

				</div>
				<div class="row">

				<?php } ?>

				<div class="col-sm-12 col-md-6 col-lg-6 no-m">

				<?php $bild = get_sub_field('bild'); ?>

					<div class="box-content flexcenter" style="background-image: url(<?php echo $bild['url'] ?>)">

						<div class="box-innercontent">
							<h3 class="tjanster-header"> <?php the_sub_field('link'); ?> </h3>

							<p class="tjanster-content"> <?php the_sub_field('content') ?> </p>
						</div>
					</div>
				</div>

				<?php 

				$i++;

				endwhile; 

				?>
				
		</div>

	</div>

	<?php endif; ?>

</div>

<div class="padding-50"></div>