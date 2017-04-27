<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	$type = 2;
	$popForm = getNews($type);

	if(isset($_POST['submit'])) {
		$newsImg = $_FILES['news_image']['name'];
		$title = $_POST['news_title'];
		$content = $_POST['news_content'];
		$type = 2;
		
		$result = addNews($type, $newsImg, $title, $content);
		
		$message = $result;
	}

	$tbl = "tbl_news";
  	$col = "news_type";
  	$id = 2;
  	$deleteImg = dynamicNews($tbl, $col, $id);

  require_once("../includes/admin_header.php");
?>

			<div class="holder">
	      	<div class="small-12 medium-12 large-12 columns homeBox">
	      		<h4>Events Page</h4>
	      		<p><b>Add and delete stories on the news page.</b><br>
	      		<i>If you want to make a line break in your paragraph, add in "< br >" without the quotations marks and spaces.</i></p>

					<div class="row" id="tabsSec">
			        <div class="small-12 medium-12 large-12 columns">
			          <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
			            <li class="tabs-title is-active"><a href="#panel1">ADD EVENT</a></li>
			            <li class="tabs-title"><a href="#panel2">DELETE EVENT</a></li>
			          </ul>

			          <div class="tabs-content" data-tabs-content="collapsing-tabs">
			            <div class="tabs-panel is-active row" id="panel1">
			              <form action="admin_events.php" method="post" enctype="multipart/form-data">
									<p><?php if(!empty($message)){echo $message;} ?></p>
									<label><b>Title:</b></label>
									<input type="text" name="news_title" value="">
									<label><b>Image (JPG files only):</b></label>
									<input type="file" name="news_image" value="">
									<label><b>Content:</b></label>
									<textarea name="news_content"></textarea>
									<input type="submit" name="submit" value="Add">
								</form>
			            </div>

			            <div class="tabs-panel row" id="panel2">
			              <div class="small-12 medium-12 large-12 columns">
			                <form action="admin_events.php" method="post" enctype="multipart/form-data">
									<?php
										while($row=mysqli_fetch_array($deleteImg)){
											echo "<div class=\"small-12 medium-12 large-12 columns end adminNews\">";
											echo "<img src=\"../images/news/{$row['news_image']}\" alt=\"{$row['news_title']}\">";
											echo "<h4>{$row['news_title']}</h4>";
						               echo "<h5>{$row['news_date']}</h5>";
						               echo "<p>{$row['news_content']}</p>";
											echo "<div class=\"deleteNewsBut\">";
											echo "<a href=\"phpscripts/caller.php?caller_id=deleteEvents&id={$row['news_id']}\">Delete</a><br><br><br>";
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