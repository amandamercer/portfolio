
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin">
	<h2><?php echo $title; ?></h2>
		<?php if($success): ?>
			<p class="text-center">Your testimonial was sent successfully!</p>
		<?php endif ?>
		<?php echo form_open('company/newTestimonial'); ?>
			<label>Full Name</label>
			<?php echo form_error('name'); ?>
			<input type="text" name="name" value="<?php echo $company->dealers_contact; ?>" readonly>
			<label>Testimonial</label>
			<?php echo form_error('testimonial'); ?>
			<textarea name="testimonial"></textarea>
			<input type="submit" value="Submit">
		</form>
	</div>
</section>
