<?php
	$connect_error = 'Could not connect';
	$mysql_host = 'localhost';
	$mysql_user = 'techspac_infox';
	$mysql_pass = 'Rajivjha1996';
	$mysql_data = 'cruser';
	
	if(!@$connection = mysqli_connect($mysql_host , $mysql_user , $mysql_pass ,$mysql_data))
		die($connect_error);
?>