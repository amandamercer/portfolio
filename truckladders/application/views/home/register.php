
<section class="row">
	<div class="medium-10 large-8 small-centered columns formSection">
	<h2>Register Account</h2>
		<?php echo form_open('home/signup'); ?>
			<div class="row">
				<div class="medium-6 columns">
					<label>Company Name</label>
					<?php echo form_error('company'); ?>
					<input type="text" name="company" placeholder="Company Name" value="<?php echo set_value('company'); ?>" max="100">
				</div>
				<div class="medium-6 columns">
					<label>City</label>
					<?php echo form_error('city'); ?>
					<input type="text" name="city" placeholder="City Name" value="<?php echo set_value('city'); ?>" max="100">
				</div>
			</div>
			<div class="row">
				<div class="medium-6 columns">
					<label>Street</label>
					<?php echo form_error('street'); ?>
					<input type="text" name="street" placeholder="Street Name" value="<?php echo set_value('street'); ?>" max="200">
				</div>
				<div class="medium-3 columns">
						<label>Province</label>
						<?php echo form_error('province'); ?>
						<?php echo $provinces; ?>
				</div>
				<div class="medium-3 columns">
						<label>Postal Code</label>
						<?php echo form_error('postalCode'); ?>
						<input type="text" name="postalCode" placeholder="A0A 0A0" value="<?php echo set_value('postalCode'); ?>" max="7">
				</div>
			</div>
			<div class="row">
				<div class="medium-6 columns">
					<label>Contact Name</label>
					<?php echo form_error('contact'); ?>
					<input type="text" name="contact" placeholder="First Name Last Name" value="<?php echo set_value('contact'); ?>" max="100">
				</div>
				<div class="medium-6 columns">
					<label>Phone Number</label>
					<?php echo form_error('phone'); ?>
					<input type="text" name="phone" placeholder="000-000-0000" value="<?php echo set_value('phone'); ?>" max="50">
				</div>
			</div>
			<div class="row">
				<div class="medium-6 columns">
					<label>Email</label>
					<?php echo form_error('email'); ?>
					<input type="email" name="email" placeholder="your_email@email.com" value="<?php echo set_value('email'); ?>" max="100">
				</div>
				<div class="medium-6 columns">
					<label>Username</label>
					<?php echo form_error('username'); ?>
					<input type="text" name="username" value="<?php echo set_value('username'); ?>" max="100">
				</div>
			</div>
			<div class="row">
				<div class="medium-6 columns">
					<label>Password</label>
					<?php echo form_error('password'); ?>
					<input type="password" name="password" max="100">
				</div>
				<div class="medium-6 columns">
					<label>Confirm Password</label>
					<?php echo form_error('password2'); ?>
					<input type="password" name="password2" max="100">
				</div>
			</div>
			<input type="submit" value="Register">
		</form>
	</div>
</section>
