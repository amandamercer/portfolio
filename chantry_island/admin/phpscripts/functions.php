<?php
	
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function getHomepage($id) {
		include('connect.php');
		$pagestring = "SELECT * FROM `tbl_pages` WHERE pages_id = {$id}";
		$pagequery = mysqli_query($link, $pagestring);

		if ($pagequery) {
			$found_page = mysqli_fetch_array($pagequery, MYSQLI_ASSOC);
			return $found_page;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
		mysql_close($link);
	}

	function editHomepage($id, $secOne, $secTwo) {
		include('connect.php');

		$updatestring = "UPDATE tbl_pages SET pages_sectionone=\"{$secOne}\", pages_sectiontwo=\"{$secTwo}\" WHERE pages_id={$id}";
		$updatequery = mysqli_query($link, $updatestring);

		if($updatequery) {
			$message = "<i>Your page has successfully been updated.</i>";
			return $message;
		} else {
			$message = "<i>There was a problem changing this information.</i>";
			return $message;
		}
		mysqli_close($link);
	}

	function getNews($type) {
		include('connect.php');
		$newsstring = "SELECT * FROM `tbl_news` WHERE news_type = {$type}";
		$newsquery = mysqli_query($link, $newsstring);

		if ($newsquery) {
			$found_news = mysqli_fetch_array($newsquery, MYSQLI_ASSOC);
			return $found_news;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
			mysql_close($link);
	}

	function addNews($type, $newsImg, $title, $content) {
		include('connect.php');
		$newsImg = mysqli_real_escape_string($link, $newsImg);

		$date = date('o-m-d');

		$qstring = "INSERT INTO tbl_news VALUES(NULL, '{$type}', '{$title}', '{$date}', 'default.jpg', '{$content}')";
		$result = mysqli_query($link,$qstring);
		

		if($_FILES['news_image']['type'] == "image/jpg" || $_FILES['news_image']['type'] == "image/jpeg") {
				
			$targetpath = "../images/news/{$newsImg}";
			
			if(move_uploaded_file($_FILES['news_image']['tmp_name'],$targetpath)) {
				
				$orig = "../images/news/".$newsImg;
				
				$qstring = "INSERT INTO tbl_news VALUES(NULL, '{$type}', '{$title}', '{$date}', '{$newsImg}', '{$content}')";
				//echo $qstring;
				$result = mysqli_query($link,$qstring);
				
				$message = "<i>Your news story has successfully been added.</i>";
				return $message;
			}
		}
		
		mysqli_close($link);
	}


	function deleteNews($id) {
		include('connect.php');

		$delstring = "DELETE FROM tbl_news WHERE news_id={$id}";
		$delquery = mysqli_query($link, $delstring);

		if($delquery){
			redirect_to("../admin_news.php");
			$message = "Your news story has been successfully deleted.";
			return $message;
		}else{
			$message = "Sorry, unable to delete this story.";
			return $message;
		}
		mysqli_close($link);
	}

	function dynamicNews($tbl, $col, $id) {
		include('connect.php');
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col}={$id} ORDER BY news_id DESC";
		$runSingle = mysqli_query($link, $querySingle);
		
		if($runSingle){
			return $runSingle;	
		}else{
			$error =  "<i>There was an error accessing this information. Please contact your admin.</i>";
			return $error;
		}
	}

	function getContact() {
		include('connect.php');
		$contactstring = "SELECT * FROM tbl_contact";
		$contactquery = mysqli_query($link, $contactstring);

		if ($contactquery) {
			$found_contact = mysqli_fetch_array($contactquery, MYSQLI_ASSOC);
			return $found_contact;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
			mysql_close($link);
	}

	function editContact($address, $phone, $tollphone) {
			include('connect.php');

			$updatestring = "UPDATE tbl_contact SET contact_address=\"{$address}\", contact_phone=\"{$phone}\", contact_tollphone=\"{$tollphone}\"";
			$updatequery = mysqli_query($link, $updatestring);

			if($updatequery) {
				$message = "<i>Your contact information has successfully been updated.</i>";
				return $message;
			} else {
				$message = "<i>There was a problem changing this information.</i>";
				return $message;
			}
		mysqli_close($link);
	}

	function getRestore() {
		include('connect.php');
		$pagestring = "SELECT * FROM tbl_restoration";
		$pagequery = mysqli_query($link, $pagestring);

		if ($pagequery) {
			$found_page = mysqli_fetch_array($pagequery, MYSQLI_ASSOC);
			return $found_page;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
		mysql_close($link);
	}

	function editRestore($volunteers, $visitors, $partners) {
			include('connect.php');

			$updatestring = "UPDATE tbl_restoration SET restoration_volunteers=\"{$volunteers}\", restoration_visitors=\"{$visitors}\", restoration_partners=\"{$partners}\"";
			$updatequery = mysqli_query($link, $updatestring);

			if($updatequery) {
				$message = "<i>Your page has successfully been updated.</i>";
				return $message;
			} else {
				$message = "<i>There was a problem changing this information.</i>";
				return $message;
			}
		mysqli_close($link);
	}


	function getRates($id) {
		include('connect.php');
		$pagestring = "SELECT * FROM `tbl_schedule` WHERE schedule_id = {$id}";
		$pagequery = mysqli_query($link, $pagestring);

		if ($pagequery) {
			$found_page = mysqli_fetch_array($pagequery, MYSQLI_ASSOC);
			return $found_page;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
		mysql_close($link);
	}

	function editRates($id, $textSec, $rates) {
		include('connect.php');

		$updatestring = "UPDATE tbl_schedule SET schedule_text=\"{$textSec}\", schedule_rates=\"{$rates}\" WHERE schedule_id={$id}";
		$updatequery = mysqli_query($link, $updatestring);

		if($updatequery) {
			$message = "<i>Your page has successfully been updated.</i>";
			return $message;
		} else {
			$message = "<i>There was a problem changing this information.</i>";
			return $message;
		}
		mysqli_close($link);
	}

	function getDonate() {
		include('connect.php');
		$pagestring = "SELECT * FROM tbl_donation";
		$pagequery = mysqli_query($link, $pagestring);

		if ($pagequery) {
			$found_page = mysqli_fetch_array($pagequery, MYSQLI_ASSOC);
			return $found_page;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
			mysql_close($link);
	}

	function editDonate($textSec, $shipmate, $lifesaving, $assistant, $lighthouse, $captain, $queen) {
			include('connect.php');

			$updatestring = "UPDATE tbl_donation SET donation_text=\"{$textSec}\", donation_shipmate=\"{$shipmate}\", donation_lifesaving=\"{$lifesaving}\", donation_assistant=\"{$assistant}\", donation_lighthouse=\"{$lighthouse}\", donation_captain=\"{$captain}\", donation_queen=\"{$queen}\"";
			$updatequery = mysqli_query($link, $updatestring);

			if($updatequery) {
				$message = "<i>Your page has successfully been updated.</i>";
				return $message;
			} else {
				$message = "<i>There was a problem changing this information.</i>";
				return $message;
			}
		mysqli_close($link);
	}

	function getBooking() {
		include('connect.php');
		$pagestring = "SELECT * FROM tbl_booking";
		$pagequery = mysqli_query($link, $pagestring);

		if ($pagequery) {
			$found_page = mysqli_fetch_array($pagequery, MYSQLI_ASSOC);
			return $found_page;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
			mysql_close($link);
	}

	function editBooking($booking) {
		include('connect.php');

		$updatestring = "UPDATE tbl_booking SET booking_info=\"{$booking}\"";
		$updatequery = mysqli_query($link, $updatestring);

		if($updatequery) {
			$message = "<i>Your page has successfully been updated.</i>";
			return $message;
		} else {
			$message = "<i>There was a problem changing this information.</i>";
			return $message;
		}
		mysqli_close($link);
	}

	function getVolunteers() {
		include('connect.php');
		$newsstring = "SELECT * FROM tbl_volunteers";
		$newsquery = mysqli_query($link, $newsstring);

		if ($newsquery) {
			$found_news = mysqli_fetch_array($newsquery, MYSQLI_ASSOC);
			return $found_news;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
			mysql_close($link);
	}

		function addVolunteer($name, $volImg, $role) {
		include('connect.php');
		$volImg = mysqli_real_escape_string($link, $volImg);

		$qstring = "INSERT INTO tbl_volunteers VALUES(NULL, 'avatar.jpg', '{$name}', '{$role}')";
		$result = mysqli_query($link,$qstring);
		
		if($_FILES['volunteers_image']['type'] == "image/jpg" || $_FILES['volunteers_image']['type'] == "image/jpeg") {
			
			$targetpath = "../images/volunteers/{$volImg}";
			
			if(move_uploaded_file($_FILES['volunteers_image']['tmp_name'],$targetpath)) {
				
				$orig = "../images/volunteers/".$volImg;
				
				$qstring = "INSERT INTO tbl_volunteers VALUES(NULL, '{$volImg}', '{$name}', '{$role}')";
				//echo $qstring;
				$result = mysqli_query($link,$qstring);
				
				$message = "<i>Your image has successfully been added.</i>";
				return $message;
			}
		}
		
		mysqli_close($link);
	}


	function deleteVolunteer($id) {
		include('connect.php');

		$delstring = "DELETE FROM tbl_volunteers WHERE volunteers_id={$id}";
		$delquery = mysqli_query($link, $delstring);

		if($delquery){
			redirect_to("../admin_volunteers.php");
			$message = "Your image has been successfully deleted.";
			return $message;
		}else{
			$message = "Sorry, unable to delete this image.";
			return $message;
		}
		mysqli_close($link);
	}

		function getAbout() {
		include('connect.php');
		$pagestring = "SELECT * FROM tbl_about";
		$pagequery = mysqli_query($link, $pagestring);

		if ($pagequery) {
			$found_page = mysqli_fetch_array($pagequery, MYSQLI_ASSOC);
			return $found_page;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
		mysql_close($link);
	}

	function editAbout($tabone, $tabtwo, $tabthree) {
		include('connect.php');

		$updatestring = "UPDATE tbl_about SET about_tabone=\"{$tabone}\", about_tabtwo=\"{$tabtwo}\", about_tabthree=\"{$tabthree}\"";
		$updatequery = mysqli_query($link, $updatestring);

		if($updatequery) {
			$message = "<i>Your page has successfully been updated.</i>";
			return $message;
		} else {
			$message = "<i>There was a problem changing this information.</i>";
			return $message;
		}
		mysqli_close($link);
	}

		function addGallery($mainImg, $desc, $credit) {
		include('connect.php');
		$mainImg = mysqli_real_escape_string($link, $mainImg);
		
		if($_FILES['gallery_image']['type'] == "image/jpg" || $_FILES['gallery_image']['type'] == "image/jpeg") {
			
			$targetpath = "../images/gallery/{$mainImg}";
			
			if(move_uploaded_file($_FILES['gallery_image']['tmp_name'],$targetpath)) {
				
				$orig = "../images/gallery/".$mainImg;
				
				$qstring = "INSERT INTO tbl_gallery VALUES(NULL, NULL, '{$mainImg}', '{$desc}', '{$credit}')";
				//echo $qstring;
				$result = mysqli_query($link,$qstring);
				
				$message = "<i>Your image has successfully been added.</i>";
				return $message;
			}
		}
		
		mysqli_close($link);
	}


	function deleteGallery($id) {
		include('connect.php');

		$delstring = "DELETE FROM tbl_gallery WHERE gallery_id={$id}";
		$delquery = mysqli_query($link, $delstring);

		if($delquery){
			redirect_to("../admin_gallery.php");
			$message = "Your image has been successfully deleted.";
			return $message;
		}else{
			$message = "Sorry, unable to delete this image.";
			return $message;
		}
		mysqli_close($link);
	}

	function getEvents($type) {
		include('connect.php');
		$newsstring = "SELECT * FROM `tbl_news` WHERE news_type = {$type}";
		$newsquery = mysqli_query($link, $newsstring);

		if ($newsquery) {
			$found_news = mysqli_fetch_array($newsquery, MYSQLI_ASSOC);
			return $found_news;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
			mysql_close($link);
	}

	function addEvents($type, $newsImg, $title, $content) {
		include('connect.php');
		$newsImg = mysqli_real_escape_string($link, $newsImg);

		$date = date('o-m-d');

		$qstring = "INSERT INTO tbl_news VALUES(NULL, '{$type}', '{$title}', '{$date}', 'default.jpg', '{$content}')";
		$result = mysqli_query($link,$qstring);
		

		if($_FILES['news_image']['type'] == "image/jpg" || $_FILES['news_image']['type'] == "image/jpeg") {
				
			$targetpath = "../images/news/{$newsImg}";
			
			if(move_uploaded_file($_FILES['news_image']['tmp_name'],$targetpath)) {
				
				$orig = "../images/news/".$newsImg;
				
				$qstring = "INSERT INTO tbl_news VALUES(NULL, '{$type}', '{$title}', '{$date}', '{$newsImg}', '{$content}')";
				//echo $qstring;
				$result = mysqli_query($link,$qstring);
				
				$message = "<i>Your news story has successfully been added.</i>";
				return $message;
			}
		}
		
		mysqli_close($link);
	}


	function deleteEvents($id) {
		include('connect.php');

		$delstring = "DELETE FROM tbl_news WHERE news_id={$id}";
		$delquery = mysqli_query($link, $delstring);

		if($delquery){
			redirect_to("../admin_events.php");
			$message = "Your news story has been successfully deleted.";
			return $message;
		}else{
			$message = "Sorry, unable to delete this story.";
			return $message;
		}
		mysqli_close($link);
	}

	function dynamicEvents($tbl, $col, $id) {
		include('connect.php');
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col}={$id} ORDER BY news_id DESC";
		$runSingle = mysqli_query($link, $querySingle);
		
		if($runSingle){
			return $runSingle;	
		}else{
			$error =  "<i>There was an error accessing this information. Please contact your admin.</i>";
			return $error;
		}
	}

?>