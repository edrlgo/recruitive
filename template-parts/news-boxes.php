<div class="site-index-news-content">
	
	<h2> Senaste nyheterna </h2>

	<div class="container-fluid">

		<div class="vh-box">

			<div class="vh-sizer col-sm-12 col-md-6 col-lg-6"></div>

			<?php

			$counter = 0;

			while($counter < 4) {

			?>

			<div class="vh-item col-sm-12 col-md-6 col-lg-6 no-m">

				<div class="news-content <?php if($counter % 2 == 1){echo 'vh-50';}else{echo 'vh-75';} ?>" style="background-image: url('http://localhost:8888/recruitive/wp-content/uploads/2017/05/IMAG0139.jpg')">
					<a class="news-link" href="#"></a>
					<span class="news-header">Det bästa med att bo i en storstad</span>
				</div>

			</div>

			<?php 

			$counter++;

			}

			?>

		</div>

	</div>

	<div class="padding-50"></div>

	<div class="flexcenter">

		<a class="btn btn-red" href="/nyheter"> Fler nyheter </a>

	</div>

</div>


