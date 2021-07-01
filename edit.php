<?php

	include "lib/db.php";
	require_once "lib/layout.php";

	if(isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = $mysqli->query("SELECT * FROM task WHERE id = $id");
		$result = mysqli_fetch_assoc($query);
	};

	if(isset($_POST['update'])) {
		$id = $_GET['id'];
		$name = $_POST['name'];
		$lastname = $_POST['description'];

		$mysqli->query("UPDATE task SET name = '$name', lastname = '$lastname' WHERE id = $id");
		header("Location: index.php");
	};

?>

<form action="edit.php?id=<?php echo $_GET['id'] ?>" method="POST" class="p-4">
	<h2 class="pb-2">Actualizar datos</h2>
	<div class="mb-3">
		<input type="text" name="name" class="form-control" placeholder="Nombre" value="<?php echo $result['name'] ?>">
	</div>
	<div class="mb-3">
		<input type="text" name="description" class="form-control" placeholder="Apellido" value="<?php echo $result['lastname'] ?>">
	</div>
	<button type="submit" class="btn btn-outline-dark" name="update">Actualizar</button>
</form>