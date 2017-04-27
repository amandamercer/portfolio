<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

  $popContact = getContact();

	if(isset($_POST['submit'])) {
		$address = trim($_POST['address']);
		$phone = trim($_POST['phone']);
		$tollphone = trim($_POST['tollphone']);

		$result = editContact($address, $phone, $tollphone);
		$message = $result;
	}

  require_once("../includes/admin_header.php");
?>

			<div class="holder">
	      	<div class="small-12 medium-12 large-12 columns homeBox">
	      		<h4>Contact Information</h4>
	      		<p><b>Changing this contact information will change it everywhere it is included on the website, including the footer at the bottom of each page.</b><br>
	      		<i>If you want to make a line break in your paragraph, add in "< br >" without the quotations marks and spaces.</i></p><br>
	      		<p><?php if(!empty($message)){echo $message;} ?></p>
	      		<form action="admin_contact.php" method="post">
						<label><b>Address:</b></label>
						<textarea name="address"><?php echo $popContact['contact_address'] ?></textarea>
						<label><b>Phone Number:</b></label>
						<input type="text" name="phone" value="<?php echo $popContact['contact_phone'] ?>">
						<label><b>Toll Free Phone Number:</b></label>
						<input type="text" name="tollphone" value="<?php echo $popContact['contact_tollphone'] ?>">
						<input type="submit" name="submit" value="Make Changes">
					</form>
	      	</div>
			</div>

<?php
  require_once("../includes/admin_footer.php");
?>