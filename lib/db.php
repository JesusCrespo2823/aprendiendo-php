<?php
	$mysqli = new mysqli("localhost", "root", "", "php");
	if($mysqli->connect_errno) {
		echo "Connect fail";
		exit();
	}
	return $mysqli;
?>