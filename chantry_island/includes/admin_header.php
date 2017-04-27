<?php
  ini_set('display errors',1);
  error_reporting(E_ALL);

  require_once("phpscripts/init.php");
  require_once("phpscripts/connect.php");
  confirm_logged_in();
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/admin.css">
  </head>
  <body>

      <!-- Title Bar -->
      <div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
        <div class="top-bar-left">
          <ul class="dropdown menu float-right" data-dropdown-menu>
            <li><a href="../admin/admin_edituser.php"><img src="../images/user_icon.svg" alt="User"></a><a href="../admin/admin_edituser.php"><?php echo $_SESSION['users_name']; ?></a></li>
            <li><a href="../admin/phpscripts/caller.php?caller_id=logout"><img src="../images/power_icon.svg" alt="User"></a><a href="../admin/phpscripts/caller.php?caller_id=logout">Log Out</a></li>
          </ul>
        </div>
      </div>

    <div class="adminContainer">

      <!-- Side Menu -->
      <div class="row">
      <h2 class="hide">Dashboard Menu</h2>
      	<nav class="small-4 medium-4 large-3 columns float-left dashMenu">
      	<h2 class="hide">Admin Menu</h2>
      		<div class="logoDiv">
      			<img src="../images/new_logo.svg" id="dashLogo" alt="Logo">
      		</div>
                  <a href="../index.php" class="menuTitle">&#8592; Website</a>
                  <a href="admin_dashboard.php" class="menuTitle">Dashboard</a>
                  <div class="divider"></div>
	      	<ul class="side-nav">
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
		</nav>