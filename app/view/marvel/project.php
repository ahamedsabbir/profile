<section class="project py-5" id="project">
	<div class="container">
			
			<div class="row">
			  <div class="col-lg-11 text-center mx-auto col-12">

				  <div class="col-lg-8 mx-auto">
					<h2>Things I have designed for digital media agencies</h2>
				  </div>

				  <div class="owl-carousel owl-theme">
<?php 
$image_list = glob("app/view/marvel/images/project/*.*");
foreach($image_list as $image_name){
?>
					<div class="item">
					  <div class="project-info">
						<img src="<?php echo $image_name; ?>" class="img-fluid" alt="project image">
					  </div>
					</div>
<?php
}
?>
				  </div>

			  </div>
			</div>
	</div>
</section>