<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	$id = 1;
	$popHome = getHomepage($id);

	if(isset($_POST['submit'])) {
		$secOne = trim($_POST['secone']);
		$secTwo = trim($_POST['sectwo']);

		$result = editHomepage($id, $secOne, $secTwo);
		$message = $result;
	}

  require_once("../includes/admin_header.php");
?>

			<div class="holder">
	      	<div class="small-12 medium-12 large-12 columns homeBox">
	      		<h4>Homepage</h4>
	      		<p><b>Edit the text sections on the homepage.</b><br>
	      		<i>If you want to make a line break in your paragraph, add in "< br >" without the quotations marks and spaces.</i></p><br>
					<p><?php if(!empty($message)){echo $message;} ?></p>
	      		<form action="admin_home.php" method="post">
						<label><b>Section One:</b></label>
						<textarea name="secone"><?php echo $popHome['pages_sectionone'] ?></textarea>
						<label><b>Section Two:</b></label>
						<textarea name="sectwo"><?php echo $popHome['pages_sectiontwo'] ?></textarea>
						<input type="submit" name="submit" value="Make Changes">
					</form>
	      	</div>
			</div>

<?php
  require_once("../includes/admin_footer.php");
?>