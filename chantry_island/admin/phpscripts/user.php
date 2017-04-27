<?php

	function editUser($id, $fname, $lname, $username, $password) {
		include('connect.php');

		$updatestring = "UPDATE tbl_user SET user_fname='{$fname}', user_lname='{$lname}', user_name='{$username}', user_pass='{$password}' WHERE user_id={$id}";
		$updatequery = mysqli_query($link, $updatestring);

		if($updatequery) {
			redirect_to("admin_dashboard.php");
		} else {
			$message = "There was a problem changing your account";
			return $message;
		}

		mysqli_close($link);
	}

	function getUser($id){
		require_once('connect.php');
		$userstring = "SELECT * FROM `tbl_user` WHERE user_id = {$id}";
		$userquery = mysqli_query($link, $userstring);

		if ($userquery) {
			$found_user = mysqli_fetch_array($userquery, MYSQLI_ASSOC);
			return $found_user;
		} else {
			$message = "There was a problem changing your account";
			return $message;
		}
		
		mysql_close($link);
	}
	
	// function createUser($fname, $lname, $username, $password, $level) {
	// 	require_once("connect.php");
	// 	$ip = 0;
	// 	$userstring = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$lname}', '{$username}', '{$password}', '{$level}', '{$ip}')";
	// 	//null is placeholder for id so the computer still automatically generates it
	// 	$userquery = mysqli_query($link, $userstring);
		
	// 	if($userquery) { //if account successfully created
	// 		redirect_to("admin_index.php");
	// 	} else {
	// 		$message = "There was a problem setting up this user.";
	// 		return $message;
	// 	}
	// 	mysqli_close($link);
	// }

?>