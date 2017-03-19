<div class="banner">
	<img src="<?php echo base_url(); ?>images/<?php echo $banner->banners_image; ?>" alt="<?php echo $banner->banners_alt; ?>">
	<p>Welcome to TruckLadders</p>
</div>

<section class="row home">
	<div class="large-6 columns">
		<h2>About Us</h2>
		<p><?php echo $about->contact_about; ?></p>
	</div>
	<div class="large-6 columns feature">
		<h2>Featured Product</h2>
		<div class="medium-4 large-6 columns">
			<img src="<?php echo base_url(); ?>images/1458255143_ladder.png" alt="Featured Ladder">
		</div>
		<div class="medium-8 large-6 columns">
			<h3>Chevrolet/GMC 32"</h3>
			<p>2012-2016<br>32" tall<br>3" wide tailgate</p>
		</div>
	</div>
</section>

<section class="row home">
	<h2>Testimonials</h2>
	<div class="small-10 small-centered columns">
		<div class="csslider">
			<?php for($t = 1; $t <= $testimonialNum; $t++): ?>
				<?php if($t === 1): ?>
					<input type="radio" name="slides" id="slides_1" checked>
				<?php else: ?>
					<input type="radio" name="slides" id="slides_<?php echo $t;?>">
				<?php endif ?>
			<?php endfor; ?>
	        <ul>
	        	<?php foreach($testimonials as $testimonial): ?>
					<li>
						<p class="testimonial"><?php echo $testimonial['testimonials_text'];?></p>
						<p class="text-right">-  <?php echo $testimonial['testimonials_name'];?>  -</p>
					</li>
				<?php endforeach; ?>
	        </ul>
	        <div class="arrows">
	        	<?php for($t = 1; $t <= $testimonialNum; $t++): ?>
					<label for="slides_<?php echo $t;?>"></label>
				<?php endfor; ?>
	        </div>
	    </div>
	</div>
</section>
