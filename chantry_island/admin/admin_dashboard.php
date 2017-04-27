<?php
  ini_set('display errors',1);
  error_reporting(E_ALL);

  	require_once("phpscripts/init.php");
	require_once("phpscripts/connect.php");
	confirm_logged_in();

  	$lastLog = "SELECT last_log_date FROM tbl_last_log, tbl_user WHERE tbl_last_log.user_id = tbl_user.user_id ORDER BY tbl_last_log.last_log_id DESC LIMIT 1, 1";
	$updateDate = mysqli_query($link, $lastLog);
	$row = mysqli_fetch_array($updateDate);

  require_once("../includes/admin_header.php");

?>

			<div class="holder">
      		<div class="small-12 medium-12 large-6 columns adminGreeting">
      			<img src="../images/sun.svg" alt="Sun Icon">
	      		<ul>
	      			<li><h3><?php echo greetingTime(); ?>, <?php echo $_SESSION['users_name']; ?>!</h3></li>
		      		<li><p>Last Login: <?php echo $row['last_log_date']; ?></p></li>
		      	</ul>
	      	</div>
      		<div class="small-12 medium-12 large-5 large-offset-1 columns adminHelp">
	      		<img src="../images/info.svg" alt="Question Mark Icon">
	      		<ul>
		      		<li><h3>Need Help?</h3></li>
		      		<li><p><b>Call: </b>1-866-938-1119</p></li>
		      	</ul>
	      	</div>
	      	<div class="small-8 medium-8 large-9 columns pagesList">
	      		<h4>Pages</h4>
	      		<p>Click any of the pages below that you would like to edit on your site.</p>
	      		<ul>
		      		<li><a href="admin_home.php">Home</a></li>
		      		<li><a href="admin_about.php">About</a></li>
		      		<li><a href="admin_news.php">News</a></li>
		      		<li><a href="admin_events.php">Events</a></li>
		      		<li><a href="admin_restoration.php">Restoration</a></li>
		      		<li><a href="admin_volunteers.php">Volunteers</a></li>
		      		<li><a href="admin_booking.php">Booking</a></li>
		      		<li><a href="admin_schedule.php">Schedule/Rates</a></li>
		      		<li><a href="admin_gallery.php">Gallery</a></li>
		      		<li><a href="admin_donations.php">Donations</a></li>
		      		<li><a href="admin_contact.php">Contact</a></li>
		      	</ul>
	      	</div>
			</div>

<?php
  require_once("../includes/admin_footer.php");
?>