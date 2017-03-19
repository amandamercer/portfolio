
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin adminPanel">
	<h2><?php echo $title; ?></h2>
		<?php if($num > 0): ?>
			<ul>
				<div class="large-10 small-centered column">
					<?php foreach($testimonials as $testimonial): ?>
					<li class="text-center panelSection dealer">
						<h3><?php echo $testimonial['testimonials_name']; ?></h3>
						<p><?php echo $testimonial['testimonials_text']; ?></p>
						<a class="button" href="<?php echo base_url(); ?>admin/approveTestimonial/<?php echo $testimonial['testimonials_id'];?>" onclick="return confirm('Are you sure you want to approve this testimonial?');">Approve</a>
					</li>
				</div>
				<?php endforeach; ?>
			</ul>
		<?php else: ?>
			<p class="text-center">There are currently no testimonials to approve.</p>
		<?php endif ?>
	</div>
</section>
