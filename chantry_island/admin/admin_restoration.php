<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

  $popRestore = getRestore();

	if(isset($_POST['submit'])) {
		$volunteers = trim($_POST['volunteers']);
		$visitors = trim($_POST['visitors']);
		$partners = trim($_POST['partners']);

		$result = editRestore($volunteers, $visitors, $partners);
		$message = $result;
	}

  require_once("../includes/admin_header.php");
?>

			<div class="holder">
	      	<div class="small-12 medium-12 large-12 columns homeBox">
	      		<h4>Restoration Page</h4>
	      		<p><b>Edit the text sections on the restoration page.</b><br>
	      		<i>If you want to make a line break in your paragraph, add in "< br >" without the quotations marks and spaces.</i></p><br>
	      		<p><?php if(!empty($message)){echo $message;} ?></p>
	      		<form action="admin_restoration.php" method="post">
						<label><b>Number of Volunteers Operating the Tour to Date:</b></label>
						<input type="text" name="volunteers" value="<?php echo $popRestore['restoration_volunteers'] ?>">
						<label><b>Number of Visitors to the Island to Date:</b></label>
						<input type="text" name="visitors" value="<?php echo $popRestore['restoration_visitors'] ?>">
						<label><b>Partners Information:</b></label>
						<textarea name="partners"><?php echo $popRestore['restoration_partners'] ?></textarea>
						<input type="submit" name="submit" value="Make Changes">
					</form>
	      	</div>
			</div>

<?php
  require_once("../includes/admin_footer.php");
?>