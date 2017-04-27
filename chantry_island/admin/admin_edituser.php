<?php
	require_once("phpscripts/init.php");
	//confirm_logged_in();

	ini_set('display errors',1);
	error_reporting(E_ALL);


	$id = $_SESSION['users_id'];
	//echo $id;
	$popForm = getUser($id);
	//echo $popForm;

	if(isset($_POST['submit'])) { //checking to see that someone has clicked submit button
		//echo "submit button clicked";
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		$result = editUser($id, $fname, $lname, $username, $password); //call editUser function and passes it the 
			//information from all variables
		$message = $result;
	}

	require_once("../includes/admin_header.php");

?>

	<div class="holder editUserCon">
		<section class="small-12 medium-12 large-6 columns userForm float-center">
			<h3>Edit <?php echo $_SESSION['users_name']; ?>'s User Information</h3>
			<?php if(!empty($message)){echo $message;} ?>
			<form action="admin_edituser.php" method="post">
				<label>First Name:</label>
				<input type="text" name="fname" value="<?php echo $popForm['user_fname'] ?>">
				<label>Last Name:</label>
				<input type="text" value="<?php echo $popForm['user_lname'] ?>" name="lname">
				<label>Username:</label>
				<input type="text" value="<?php echo $popForm['user_name'] ?>" name="username">
				<label>Password:</label>
				<input type="text" value="<?php echo $popForm['user_pass'] ?>" name="password">
				<input type="submit" name="submit" value="Make Changes">
			</form>
		</section>
	</div>
	
<?php
	require_once("../includes/admin_footer.php");
?>