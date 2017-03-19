
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin">
	<h2><?php echo $title; ?></h2>
		<?php echo form_open('admin/submit'); ?>
			<label>Username</label>
			<?php echo form_error('username'); ?>
			<input type="text" name="username" value="<?php echo set_value('username'); ?>" max="100">
			<label>Password</label>
			<?php echo form_error('password'); ?>
			<input type="password" name="password" max="100">
			<input type="submit" value="Login">
		</form>
	</div>
</section>
