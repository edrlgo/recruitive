<div class="site-index-news-content">
	
	<h2> Senaste nyheterna </h2>

	<div class="container-fluid">

		<div class="vh-box">

			<div class="vh-sizer col-sm-12 col-md-6 col-lg-6"></div>

			<?php

			$counter = 0;
            $args = array( 'numberposts' => '4' );
            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ){ 

			while($counter < 4) {

			?>

			<div class="vh-item col-sm-12 col-md-6 col-lg-6 no-m">

				<div class="news-content <?php if($counter % 2 == 1){echo 'vh-50';}else{echo 'vh-75';} ?>" style="background: linear-gradient(rgba(64, 64, 64, 0.5), rgba(64, 64, 64, 0.2)), url('<?php echo get_the_post_thumbnail_url($recent["ID"]); ?>');">
					<a class="news-link" href="<?php echo get_permalink($recent["ID"]); ?>"></a>
					<span class="news-header"><?php echo ($recent["post_title"]); ?></span>
				</div>

			</div>

			<?php 

			$counter++;

			}

            }            

			?>

		</div>

	</div>

	<div class="padding-50"></div>

	<div class="flexcenter">

		<a class="btn btn-red" href="/nyheter"> Fler nyheter </a>

	</div>

</div>


