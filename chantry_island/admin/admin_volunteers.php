<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	$popVol = getVolunteers();

	if(isset($_POST['submit'])) {
		$name = trim($_POST['name']);
		$volImg = $_FILES['volunteers_image']['name'];
		$role = trim($_POST['role']);

		$result = addVolunteer($name, $volImg, $role);
		$message = $result;
	}

	$tbl = "tbl_volunteers";
	$deleteImg = getAll($tbl);

  require_once("../includes/admin_header.php");
?>

			<div class="holder">
	      	<div class="small-12 medium-12 large-12 columns homeBox">
	      		<h4>Volunteers Page</h4>
	      		<p><b>Add and delete volunteers.</b><br>

					<div class="row" id="tabsSec">
			        <div class="small-12 medium-12 large-12 columns">
			          <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
			            <li class="tabs-title is-active"><a href="#panel1">ADD VOLUNTEER</a></li>
			            <li class="tabs-title"><a href="#panel2">DELETE VOLUNTEERS</a></li>
			          </ul>

			          <div class="tabs-content" data-tabs-content="collapsing-tabs">
			            <div class="tabs-panel is-active row" id="panel1">
			              <form action="admin_volunteers.php" method="post" enctype="multipart/form-data">
							<p><?php if(!empty($message)){echo $message;} ?></p>
									<label><b>Image (JPG files only):</b></label>
									<input type="file" name="volunteers_image" value="">
									<label><b>First and Last Name:</b></label>
									<input type="text" name="name" value="">
									<label><b>Role:</b></label>
									<input type="text" name="role" value="">
									<input type="submit" name="submit" value="Add">
								</form>
			            </div>

			            <div class="tabs-panel row" id="panel2">
			              <div class="small-12 medium-12 large-12 columns">
			                <form action="admin_volunteers.php" method="post" enctype="multipart/form-data">
									<?php
										while($row=mysqli_fetch_array($deleteImg)){
											echo "<div class=\"small-6 medium-6 large-4 columns end adminGalImg\">";
											echo "<img src=\"../images/volunteers/{$row['volunteers_image']}\" alt=\"{$row['volunteers_name']}\">";
											echo "<h4>{$row['volunteers_name']}</h4>";
											echo "<h5>{$row['volunteers_role']}</h5>";
											echo "<div class=\"deleteConBut\">";
											echo "<a href=\"phpscripts/caller.php?caller_id=deleteVolunteer&id={$row['volunteers_id']}\">Delete</a>";
											echo "</div>";
											echo "</div>";
										}
									?>
								</form>
			              </div>
			            </div>


					<br>
					<p><?php if(!empty($message)){echo $message;} ?></p>
	      	</div>
			</div>

<?php
  require_once("../includes/admin_footer.php");
?>