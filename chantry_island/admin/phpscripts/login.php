<?php

	ini_set('display_errors',1);
    error_reporting(E_ALL);

		function logIn($username, $password, $ip) {
		require_once("connect.php");
		$timestamp = date('l, F jS, o @ g:ia');
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		$loginString = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
		//echo $loginString;
		$user_set = mysqli_query($link, $loginString);
		
		if(mysqli_num_rows($user_set)) {
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			$id = $found_user['user_id'];
			$_SESSION['users_id'] = $id;
			$_SESSION['users_name'] = $found_user['user_fname'];
			if(mysqli_query($link, $loginString)){
				$updateString = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id={$id}";
				$updateQuery = mysqli_query($link, $updateString);
				$lastLog = "INSERT INTO tbl_last_log(last_log_date, user_id) VALUE ('$timestamp', '$id')";
				$updateDate = mysqli_query($link, $lastLog);
			}
				redirect_to("admin/admin_dashboard.php");
		} else {

			$message = "Username and/or password incorrect.<br>Please ensure caps lock is turned off.";
			return $message;
			
			
		}
		mysqli_close($link);
	}

	date_default_timezone_set('Canada/Eastern');

	function greetingTime() {
		$time = date('H');

		if($time < 12) {
			$greeting = "Good morning";
		} else if ($time > 12 && $time < 17) {
			$greeting = "Good afternoon";
		} else {
			$greeting = "Good evening";
		}
		return $greeting;
	}


?>