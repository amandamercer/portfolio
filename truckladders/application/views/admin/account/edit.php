
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin">
	<h2><?php echo $title; ?></h2>
		<?php echo form_open('admin/edit'); ?>
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $this->session->userdata('username'); ?>" readonly>
			<label>Old Password</label>
			<?php echo form_error('password_old'); ?>
			<?php if($error): ?>
			<p>Old Password did not match.</p>
			<?php endif ?>
			<input type="password" name="password_old" max="100">
			<label>New Password</label>
			<?php echo form_error('password'); ?>
			<input type="password" name="password" max="100">
			<label>Confirm New Password</label>
			<?php echo form_error('password2'); ?>
			<input type="password" name="password2" max="100">
			<input type="submit" value="Update">
		</form>
	</div>
</section>
