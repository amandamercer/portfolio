
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin">
	<h2><?php echo $title; ?></h2>
		<?php echo form_open('admin/updateContact'); ?>
			<label>Phone Number</label>
			<?php echo form_error('phone'); ?>
			<input type="text" name="phone" value="<?php echo $contact->contact_phone; ?>" max="50">
			<label>Email</label>
			<?php echo form_error('email'); ?>
			<input type="email" name="email" value="<?php echo $contact->contact_email; ?>" max="100">
			<label>City</label>
			<?php echo form_error('city'); ?>
			<input type="text" name="city" value="<?php echo $contact->contact_city; ?>" max="100">
			<label>Province</label>
			<?php echo form_error('province'); ?>
			<?php echo $provinces; ?>
			<label>Street</label>
			<?php echo form_error('street'); ?>
			<input type="text" name="street" value="<?php echo $contact->contact_street; ?>" max="200">
			<label>Postal Code</label>
			<?php echo form_error('postalCode'); ?>
			<input type="text" name="postalCode" value="<?php echo $contact->contact_postalCode; ?>" max="7">
			<input type="submit" value="Update">
		</form>
	</div>
</section>
