<?php
	$session_id = $_POST['session_id'];

	$current_token = sha1($session_id);

	echo json_encode(array("id" => $current_token));
?>