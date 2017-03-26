<?php

	require '../inc/func.inc.php';

	if(!isadmin()){
		header('Location: ../index.php');
	}

	if(isset($_POST['download_website'])){
		$website_url = $_POST['website_url'];

		$cmd = "wget --recursive " . $website_url . " -o log.file";
		exec($cmd, $out, $err);
		header('Location: ../add-website.php');
	}
?>
