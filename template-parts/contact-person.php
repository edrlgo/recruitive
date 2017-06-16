<div class="site-about-us-contact">

<div class="site-about-us-photo flexcenter">

	<?php

	$image = get_sub_field('contact_photo');

	if ( !empty($image) ): ?>

	<img src="<?php echo $image['url'] ?>"; alt="<?php echo $image['alt']; ?>" />

	<?php endif; ?>

</div>

<h3> <?php the_sub_field('contact_name'); ?> </h3>

<span class="site-about-us-role"> <?php the_sub_field('contact_title'); ?> </span>
<br />

<?php if( get_sub_field('contact_phone') ): ?>
<a class="site-about-us-link" href="tel:<?php the_sub_field('contact_phone'); ?>"> <?php the_sub_field('contact_phone'); ?> </a>
<br />
<?php endif; ?>

<a class="site-about-us-link" href="mailto:<?php the_sub_field('contact_email'); ?>"> <?php the_sub_field('contact_email'); ?> </a>

</div>