<?php
	require_once('init.php');

	if(isset($_GET['caller_id'])){
		$dir = $_GET['caller_id'];
		//echo $dir;
		if($dir == "logout"){
			logged_out();
		}else if($dir == "deleteImage"){
			$id = $_GET['id'];
			deleteGallery($id);
		}else if($dir == "deleteVolunteer"){
			
			$id = $_GET['id'];
			deleteVolunteer($id);
		}else if($dir == "deleteNews"){
			
			$id = $_GET['id'];
			deleteNews($id);
		}else if($dir == "deleteEvents"){
			
			$id = $_GET['id'];
			deleteEvents($id);
		}
	}
?>