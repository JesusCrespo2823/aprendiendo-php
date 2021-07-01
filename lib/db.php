<?php
	$mysqli = new mysqli("host", "user", "password", "database");
	if($mysqli->connect_errno) {
		echo "Connect fail";
		exit();
	}
	return $mysqli;
?>