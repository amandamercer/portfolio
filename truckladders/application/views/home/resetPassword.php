
<section class="row">
	<div class="medium-8 large-6 small-centered columns formSection">
	<h2>Reset Password</h2>
		<?php echo form_open('home/password'); ?>
			<label>Username</label>
			<input type="text" name="username" value="<?php if($username){echo $username;}else{echo "Username Not Found";} ?>" readonly>
			
			<?php if($username): ?>
			
			<label>New Password</label>
			<?php echo form_error('password'); ?>
			<input type="password" name="password" max="100">
			<label>Confirm New Password</label>
			<?php echo form_error('password2'); ?>
			<input type="password" name="password2" max="100">
			<input type="submit" value="Reset">
			
			<?php endif; ?>
		</form>
	</div>
</section>
