<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

if(isset($_POST['submit'])) {
		$mainImg = $_FILES['gallery_image']['name'];
		$desc = $_POST['gallery_desc'];
		$credit = $_POST['gallery_credit'];
		
		$result = addGallery($mainImg, $desc, $credit);
		
		$message = $result;
	}

	$tbl = "tbl_gallery";
	$deleteImg = getAll($tbl);

  require_once("../includes/admin_header.php");
?>

			<div class="holder">
	      	<div class="small-12 medium-12 large-12 columns homeBox">
	      		<h4>Gallery Page</h4>
	      		<p><b>Add and delete images from the gallery page.</b><br>

					<div class="row" id="tabsSec">
			        <div class="small-12 medium-12 large-12 columns">
			          <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
			            <li class="tabs-title is-active"><a href="#panel1">ADD IMAGE</a></li>
			            <li class="tabs-title"><a href="#panel2">DELETE IMAGE</a></li>
			          </ul>

			          <div class="tabs-content" data-tabs-content="collapsing-tabs">
			            <div class="tabs-panel is-active row" id="panel1">
			              <form action="admin_gallery.php" method="post" enctype="multipart/form-data">
									<p><?php if(!empty($message)){echo $message;} ?></p>
									<label><b>Image (JPG files only):</b></label>
									<input type="file" name="gallery_image" value="">
									<label><b>Description:</b></label>
									<textarea name="gallery_desc"></textarea>
									<label><b>Name of Photographer (for credit purposes):</b></label>
									<input type="text" name="gallery_credit" value="">
									<input type="submit" name="submit" value="Add">
								</form>
			            </div>

			            <div class="tabs-panel row" id="panel2">
			              <div class="small-12 medium-12 large-12 columns">
			                <form action="admin_gallery.php" method="post" enctype="multipart/form-data">
									<?php
										while($row=mysqli_fetch_array($deleteImg)){
											echo "<div class=\"small-6 medium-6 large-4 columns end adminGalImg\">";
											echo "<img src=\"../images/gallery/{$row['gallery_image']}\" alt=\"{$row['gallery_credit']}\">";
											echo "<div class=\"deleteConBut\">";
											echo "<a href=\"phpscripts/caller.php?caller_id=deleteImage&id={$row['gallery_id']}\">Delete</a>";
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