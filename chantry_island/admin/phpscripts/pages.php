<?php

	function editPages($sectionone, $sectiontwo, $images) {
		include('connect.php');

		$updatestring = "UPDATE tbl_pages SET pages_sectionone='{$sectionone}', pages_sectiontwo='{$sectionone}', pages_images='{$images}' WHERE pages_id={$id}";
		$updatequery = mysqli_query($link, $updatestring);

		if($updatequery) {
			redirect_to("admin_dashboard.php");
		} else {
			$message = "There was a problem gathering the information.";
			return $message;
		}

		mysqli_close($link);
	}

	function getPages() {
		require_once('connect.php');
		$userstring = "SELECT * FROM `tbl_pages`";
		$userquery = mysqli_query($link, $userstring);

		if ($userquery) {
			$found_pages = mysqli_fetch_array($userquery, MYSQLI_ASSOC);
			return $found_pages;
		} else {
			$message = "There was a problem gathering the information.";
			return $message;
		}
		
		mysql_close($link);
	}

	?>