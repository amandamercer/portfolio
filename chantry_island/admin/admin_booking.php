<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	$popBooking = getBooking();

	if(isset($_POST['submit'])) {
		$booking = trim($_POST['booking']);

		$result = editBooking($booking);
		$message = $result;
	}

  require_once("../includes/admin_header.php");
?>

			<div class="holder">
	      	<div class="small-12 medium-12 large-12 columns homeBox">
	      		<h4>Booking Page</h4>
	      		<p><b>Edit the text sections on the booking page.</b><br>
	      		<i>If you want to make a line break in your paragraph, add in "< br >" without the quotations marks and spaces.</i></p><br>
					<p><?php if(!empty($message)){echo $message;} ?></p>
	      		<form action="admin_booking.php" method="post">
						<label><b>Booking Information:</b></label>
						<textarea name="booking"><?php echo $popBooking['booking_info'] ?></textarea>
						<input type="submit" name="submit" value="Make Changes">
					</form>
	      	</div>
			</div>

<?php
  require_once("../includes/admin_footer.php");
?>