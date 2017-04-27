<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	$popDonate = getDonate();

	if(isset($_POST['submit'])) {
		$textSec = trim($_POST['textSec']);
		$shipmate = trim($_POST['shipmate']);
		$lifesaving = trim($_POST['lifesaving']);
		$assistant = trim($_POST['assistant']);
		$lighthouse = trim($_POST['lighthouse']);
		$captain = trim($_POST['captain']);
		$queen = trim($_POST['queen']);

		$result = editDonate($textSec, $shipmate, $lifesaving, $assistant, $lighthouse, $captain, $queen);
		$message = $result;
	}

  require_once("../includes/admin_header.php");
?>

			<div class="holder">
	      	<div class="small-12 medium-12 large-12 columns homeBox">
	      		<h4>Donations Page</h4>
	      		<p><b>Edit the text sections on the donations page.</b><br>
	      		<i>If you want to make a line break in your paragraph, add in "< br >" without the quotations marks and spaces.</i></p><br>
					<p><?php if(!empty($message)){echo $message;} ?></p>
	      		<form action="admin_donations.php" method="post">
						<label><b>Text Section:</b></label>
						<textarea name="textSec"><?php echo $popDonate['donation_text'] ?></textarea>
						<label><b>Donor Category List Names:</b></label>
						<textarea name="shipmate"><?php echo $popDonate['donation_shipmate'] ?></textarea>
						<textarea name="lifesaving"><?php echo $popDonate['donation_lifesaving'] ?></textarea>
						<textarea name="assistant"><?php echo $popDonate['donation_assistant'] ?></textarea>
						<textarea name="lighthouse"><?php echo $popDonate['donation_lighthouse'] ?></textarea>
						<textarea name="captain"><?php echo $popDonate['donation_captain'] ?></textarea>
						<textarea name="queen"><?php echo $popDonate['donation_queen'] ?></textarea>
						<input type="submit" name="submit" value="Make Changes">
					</form>
	      	</div>
			</div>

<?php
  require_once("../includes/admin_footer.php");
?>