<div class="banner">
	<img src="<?php echo base_url(); ?>images/<?php echo $banner->banners_image; ?>" alt="<?php echo $banner->banners_alt; ?>">
</div>

<section class="row contact">
	<div class="small-12 medium-6 large-5 columns">
        <h2>Contact</h2>
        <h3>Truckladders</h3>
        <p><?php echo $contact->contact_street; ?><br><?php echo $contact->contact_city; ?>, <?php echo $contact->contact_province; ?><br><?php echo $contact->contact_postalCode; ?></p>
    	<p><?php echo $contact->contact_phone; ?><br><?php echo $contact->contact_email; ?></p>
    </div>

    <div id="contact" class="small-12 medium-6 large-5 columns">
        <h2>General Inquiries</h2>
        <?php echo form_open('contact/send'); ?>
			
			<?php if($success): ?>
			<p id="success" class="text-center">Your message was sent successfully!</p>
			<?php else: ?>
			<p class="red text-center"></p>
			<?php endif ?>

			<label>Name:</label>
			<?php echo form_error('name'); ?>
			<input type="text" name="name" placeholder="First Name Last Name" value="<?php echo set_value('name'); ?>">
			<label>Email:</label>
			<?php echo form_error('email'); ?>
			<input type="email" name="email" placeholder="your_email@email.com" value="<?php echo set_value('email'); ?>">
			<label>Subject:</label>
			<?php echo form_error('subject'); ?>
			<?php echo $subject; ?>
			<label>Message:</label>
			<?php echo form_error('message'); ?>
			<textarea name="message"><?php echo set_value('message'); ?></textarea>
			<input type="submit" value="Send">
		</form>
    </div>
</section>

<section class="row">
	<div class="small-12 columns">
        <h2>Find Dealers</h2>
        <div id="dealers"></div>
    </div>
</section>
