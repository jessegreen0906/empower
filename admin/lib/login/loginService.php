<?php
#	require_once('/lib/db/SqlInterface.php');
	
#	$sql = new SqlInterface();
	$data = array();
	$data['success'] = true;
	$data['cookieName'] = "testAdmin";
	$data['cookieExpires'] = date("D, j M Y G:i:s UTC");
	$data['username'] = "username";
	$data['errorMessage'] = "Blah blah is wrong";
	echo json_encode($data);
	
	
?>
