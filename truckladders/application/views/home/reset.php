
<section class="row">
	<div class="medium-8 large-6 small-centered columns formSection">
	<h2>Reset Password</h2>
		<p class="text-center">Please fill in your username and email address associated with your account and we will email you a link to reset your password.</p>
		<?php echo form_open('home/account'); ?>
			<label>Username</label>
			<?php echo form_error('username'); ?>
			<input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" max="100">
			<label>Email</label>
			<?php echo form_error('email'); ?>
			<input type="email" name="email" placeholder="your_email@email.com" value="<?php echo set_value('email'); ?>" max="100">
			<input type="submit" value="Request Reset">
		</form>
	</div>
</section>
