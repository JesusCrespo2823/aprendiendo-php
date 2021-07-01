<?php
	
	include("lib/db.php");

	$name = $_POST['name'];
	$description = $_POST['description'];
	$sql = "INSERT INTO task(name, lastname) VALUES('$name', '$description')";
	$mysqli->query($sql);

	header("Location: index.php");

?>