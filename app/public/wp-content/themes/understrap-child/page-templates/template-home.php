<?php  
/**
 * Template Name: Home page  
 * */ 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="wrapper" id="page-wrapper">
	<div id="content" tabindex="-1">
		<main class="site-main" id="main">
			<?php
			while ( have_posts() ) {
				the_post();?>

				<div id="carouselControls" class="carousel slide car-bg" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
						<div style="background-image: url(https://keyassets.timeincuk.net/inspirewp/live/wp-content/uploads/sites/8/2015/12/GK10TW-920x622.jpg);"></div> 
						</div>
						<div class="carousel-item">
						<div style="background-image: url(https://www.thelabradorsite.com/wp-content/uploads/2020/05/10-tips.jpg);"></div> 
						</div>
						<div class="carousel-item">
						<div style="background-image: url(https://www.thelabradorsite.com/wp-content/uploads/2017/07/When-Do-Dogs-Stop-Growing-LS-long.jpg);"></div> 
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>

				<section class="one container py-5">
					<div class="row justify-content-center align-items-center">
						<div class="col-md-10 col-lg-6">
							<h1 class="text-center"> <?php the_title()?></h1>  
							<?php the_content()?>
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Înscrie-te acum</button>
								<button type="submit" class="btn btn-outline-secondary">Cere detalii</button>
							</div>
						</div>
					</div>
				</section>

				<section class="two py-5 text-center">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-sm-6 col-md-4">
								<img class = "c-uri" src="./demo/images/DSC_1402.JPG" alt="">
								<h4>Performanță</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
							<div class="col-sm-6 col-md-4">
								<img class="c-uri" src="./demo/images/DSC_1402.JPG" alt="">
								<h4>Siguranță în ziua de mâine</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
							<div class="col-sm-6 col-md-4">
								<img class="c-uri" src="./demo/images/DSC_1402.JPG" alt="">
								<h4>Dublarea venitului</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
						</div>
					</div>
				</section>

				<section class="three">
					<div class="container">
						<div class="row justify-content-center align-items-center text-center">
							<div class="col-6 col-lg-3">
								<h3>
									<?php
									echo number_format($var1=1234,0,"",".");
									?>
									<br>
									<?php
									$col=$col_final=1;
									$str="Participanți la modulul ";
									echo $str.$col;
									?>
								</h3>
							</div>
							<div class="col-6 col-lg-3">
								<h3>
									<?php
									echo number_format($var2=5678,0,"",".");
									?>
										<br>
									<?php
									echo $str.++$col;
									?>
								</h3>
							</div>
							<div class="col-6 col-lg-3">
								<h3>
									<?php
									echo number_format($var3=9012,0,"",".");
									?>
										<br>
									<?php
									echo $str.++$col;
									?>
								</h3>
							</div>
							<div class="col-6 col-lg-3">
								<h3>
									<?php
									// $var4=$var1+$var2+$var3;
									if (($var4=$var1+$var2+$var3)>= 50000){
										echo "<strong>".number_format($var4,0,"",".")."</strong>";
									}
									else{ echo number_format($var4,0,"",'.');}
									?>
									<br>
									<?php
									echo $str.$col_final.", ".++$col_final." și ".++$col_final
									?>
								</h3>
							</div>
						</div>
					</div>
				</section>
			
			<?php } ?>

		</main>
	</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php

get_footer();
