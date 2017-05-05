<div class="site-about-us-photo">

	<?php

	$image = get_field('image');

	if ( !empty($image) ): ?>

	<img src="<?php echo $image['url'] ?>"; alt="<?php echo $image['alt']; ?>" />

	<?php endif; ?>

</div>

<h3> <?php the_field('namn') ?> </h3>

<span class="site-about-us-role"> <?php the_field('role') ?> </span>
<br />
<a class="site-about-us-link" href="tel:<?php the_field('phone-number'); ?>"> <?php the_field('phone-number'); ?> </a>
<br />
<a class="site-about-us-link" href="mailto:<?php the_field('email'); ?>"> <?php the_field('email'); ?> </a>