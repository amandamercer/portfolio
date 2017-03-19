
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin">
	<h2><?php echo $title; ?></h2>
		<?php echo form_open_multipart('admin/updateBanner'); ?>
			<label>Name</label>
			<?php echo $hidden; ?>
			<?php echo form_error('name'); ?>
			<input type="text" name="name" value="<?php echo $banner->banners_name; ?>" readonly>
			<label>Associated Text</label>
			<?php echo form_error('alt'); ?>
			<input type="text" name="alt" value="<?php echo $banner->banners_alt; ?>" max="200">
			<label>Banner Image</label>
			<img src="<?php echo base_url(); ?>images/<?php echo $banner->banners_image; ?>" alt="<?php echo $banner->banners_alt; ?>">
			<?php echo form_error('image'); ?>
			<input type="file" name="image" accept="image/gif, image/jpg, image/jpeg, image/png">
			<br><br>
			<input type="submit" value="Update Banner">
		</form>
	</div>
</section>
