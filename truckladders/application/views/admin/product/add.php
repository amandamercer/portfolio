
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin">
	<h2><?php echo $title; ?></h2>
		<?php echo form_open_multipart('admin/addProduct'); ?>
			<label>Name</label>
			<?php echo form_error('name'); ?>
			<input type="text" name="name" value="<?php echo set_value('name'); ?>" max="100">
			<label>Material</label>
			<?php echo form_error('material'); ?>
			<input type="text" name="material" value="<?php echo set_value('material'); ?>" max="100">
			<label>Description</label>
			<?php echo form_error('description'); ?>
			<textarea name="description"><?php echo set_value('description'); ?></textarea>
			<label>Main Product Image</label>
			<?php echo form_error('image'); ?>
			<input type="file" name="image" accept="image/gif, image/jpg, image/jpeg, image/png">
			<input type="submit" value="Add Product">
		</form>
	</div>
</section>
