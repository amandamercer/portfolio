<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	$id = 1;
	$popRates = getRates($id);

	if(isset($_POST['submit'])) {
		$textSec = trim($_POST['textSec']);
		$rates = trim($_POST['rates']);

		$result = editRates($id, $textSec, $rates);
		$message = $result;
	}

  require_once("../includes/admin_header.php");
?>

			<div class="holder">
	      	<div class="small-12 medium-12 large-12 columns homeBox">
	      		<h4>Schedule & Rates Page</h4>
	      		<p><b>Edit the text sections on the schedule & rates page.</b><br>
	      		<i>If you want to make a line break in your paragraph, add in "< br >" without the quotations marks and spaces.</i></p><br>
					<p><?php if(!empty($message)){echo $message;} ?></p>
	      		<form action="admin_schedule.php" method="post">
						<label><b>Text Section:</b></label>
						<textarea name="textSec"><?php echo $popRates['schedule_text'] ?></textarea>
						<label><b>Rates Information:</b></label>
						<textarea name="rates"><?php echo $popRates['schedule_rates'] ?></textarea>
						<input type="submit" name="submit" value="Make Changes">
					</form>
	      	</div>
			</div>

<?php
  require_once("../includes/admin_footer.php");
?>