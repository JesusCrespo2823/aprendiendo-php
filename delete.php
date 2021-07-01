<?php
	
	include("lib/db.php");

	$id = $_GET['id'];
	$mysqli->query("DELETE FROM task WHERE id = $id");

	header("Location: index.php")

?>