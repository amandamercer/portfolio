
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin adminPanel">
	<h2><?php echo $title; ?></h2>
		<?php if($num > 0): ?>
			<ul>
				<?php foreach($testimonials as $testimonial): ?>
			    <div class="large-10 small-centered column dealer">
					<h3><?php echo $testimonial['testimonials_name']; ?></h3>
					<li class="text-center panelSection">
						<p><?php echo $testimonial['testimonials_text']; ?></p>
					</li>
					<a class="button" href="<?php echo base_url(); ?>admin/removeTestimonial/<?php echo $testimonial['testimonials_id'];?>" onclick="return confirm('Are you sure you want to remove this testimonial?');">Remove</a>
                </div> 
				<?php endforeach; ?>
			</ul>
		<?php else: ?>
			<p class="text-center">There are currently no testimonials that are approved.</p>
		<?php endif ?>
	</div>
</section>
