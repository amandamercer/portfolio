<?php
	//echo "from functions";

	function redirect_to($location) {

		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}

	}
	
	function sendMessage($name, $email, $company, $message, $direct) {
		$to = "contact@amandamercer.ca";
		$subject = "Message from amandamercer.ca";
		$body = "Name: {$name}\r\nCompany: {$company}\r\nReply to: {$email}\n\n{$message}";
		mail($to, $subject, $body);
		redirect_to($direct);
	}

	function getAll($tbl) {
		include('connect.php');
		$queryAll = "SELECT * FROM {$tbl}";
		$runAll = mysqli_query($link, $queryAll);
		
		if($runAll){
			return $runAll;	
		}else{
			$error =  "There was an error accessing this information.";
			return $error;
		}
	}

	function getAll2($tbl2, $id) {
		include('connect.php');
		$queryAll = "SELECT * FROM {$tbl2} ORDER BY {$id} DESC";
		$runAll = mysqli_query($link, $queryAll);
		
		if($runAll){
			return $runAll;	
		}else{
			$error =  "There was an error accessing this information.";
			return $error;
		}
	}

	// function getSingle($tbl2, $col, $id2) {
	// 	include('connect.php');
	// 	$querySingle = "SELECT * FROM {$tbl2} WHERE {$col}={$id2}";
	// 	$runSingle = mysqli_query($link, $querySingle);
		
	// 	if($runSingle){
	// 		return $runSingle;	
	// 	}else{
	// 		$error =  "There was an error accessing this information. Please contact your admin.";
	// 		return $error;
	// 	}
	// }

	function getSingle() {
		include('connect.php');
		$querySingle = "SELECT * FROM tbl_portfolio INNER JOIN tbl_images ON tbl_portfolio.portfolio_id = tbl_images.portfolio_id";
		$runSingle = mysqli_query($link, $querySingle);
		
		if($runSingle){
			return $runSingle;	
		}else{
			$error =  "There was an error accessing this information. Please contact your admin.";
			return $error;
		}
	}

?>