
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin">
	<h2><?php echo $title; ?></h2>
		<?php echo form_open_multipart('admin/editProduct'); ?>
			<label>Name</label>
			<?php echo $hidden; ?>
			<?php echo form_error('name'); ?>
			<input type="text" name="name" value="<?php echo $ladder->ladders_name; ?>" max="100">
			<label>Material</label>
			<?php echo form_error('material'); ?>
			<input type="text" name="material" value="<?php echo $ladder->ladders_material; ?>" max="100">
			<label>Description</label>
			<?php echo form_error('description'); ?>
			<textarea name="description"><?php echo $ladder->ladders_desc; ?></textarea>
			<label>Main Product Image</label>
			<img src="<?php echo base_url(); ?>images/<?php echo $ladder->ladders_image1; ?>" alt="<?php echo $ladder->ladders_name; ?>">
			<?php echo form_error('image1'); ?>
			<input type="file" name="image1" accept="image/gif, image/jpg, image/jpeg, image/png">
			<label>Product Image 2</label>
			<img src="<?php echo base_url(); ?>images/<?php echo $ladder->ladders_image2; ?>" alt="<?php echo $ladder->ladders_name; ?>">
			<?php echo form_error('image2'); ?>
			<input type="file" name="image2" accept="image/gif, image/jpg, image/jpeg, image/png">
			<label>Product Image 3</label>
			<img src="<?php echo base_url(); ?>images/<?php echo $ladder->ladders_image3; ?>" alt="<?php echo $ladder->ladders_name; ?>">
			<?php echo form_error('image3'); ?>
			<input type="file" name="image3" accept="image/gif, image/jpg, image/jpeg, image/png">
			<label>Product Image 4</label>
			<img src="<?php echo base_url(); ?>images/<?php echo $ladder->ladders_image4; ?>" alt="<?php echo $ladder->ladders_name; ?>">
			<?php echo form_error('image4'); ?>
			<input type="file" name="image4" accept="image/gif, image/jpg, image/jpeg, image/png">
			<input type="submit" value="Update Product">
		</form>
	</div>
</section>
