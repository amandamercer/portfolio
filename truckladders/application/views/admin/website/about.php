
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin">
	<h2><?php echo $title; ?></h2>
		<?php echo form_open('admin/updateAbout'); ?>
			<label>About Us</label>
			<?php echo form_error('about'); ?>
			<textarea name="about"><?php echo $about->contact_about; ?></textarea>
			<input type="submit" value="Update">
		</form>
	</div>
</section>
