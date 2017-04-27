<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	$popForm = getAbout();

	if(isset($_POST['submit'])) {
		$tabone = trim($_POST['tabone']);
		$tabtwo = trim($_POST['tabtwo']);
		$tabthree = trim($_POST['tabthree']);

		$result = editAbout($tabone, $tabtwo, $tabthree);
		$message = $result;
	}

  require_once("../includes/admin_header.php");
?>

			<div class="holder">
	      	<div class="small-12 medium-12 large-12 columns homeBox">
	      		<h4>About Page</h4>
	      		<p><b>Edit the text sections and the tab sections on the about page.</b><br>
	      		<i>If you want to make a line break in your paragraph, add in "< br >" without the quotations marks and spaces.</i></p><br>
					<p><?php if(!empty($message)){echo $message;} ?></p>
	      		<div class="small-12 medium-12 large-12 columns">
		            	<form action="admin_about.php" method="post">
		            		<h4>Chantry Island Tab</h4>
			              <textarea name="tabone"><?php echo $popForm['about_tabone'] ?></textarea>
			              <br><br>
		            		<h4>Lighthouse History Tab</h4>
			              <textarea name="tabtwo"><?php echo $popForm['about_tabtwo'] ?></textarea>
			              <br><br>
		            		<h4>Bird Sanctuary Tab</h4>
			              <textarea name="tabthree"><?php echo $popForm['about_tabthree'] ?></textarea>
			              <input type="submit" name="submit" value="Make Changes">
		              </form>
		            </div>
	      	</div>
			</div>

<?php
  require_once("../includes/admin_footer.php");
?>