<?php
	require_once "lib/layout.php";
	include "lib/db.php";
	$query = $mysqli->query("SELECT id, name, lastname FROM task");
	$registros = mysqli_fetch_all($query);
?>

<div class="row container-fluid">
	<div class="col">
		<form action="save.php" method="POST" class="p-4">
			<h2 class="pb-2">Registrar datos</h2>
			<div class="mb-3">
				<input type="text" name="name" class="form-control" placeholder="Nombre">
			</div>
			<div class="mb-3">
				<input type="text" name="description" class="form-control" placeholder="Apellido">
			</div>
			<button type="submit" class="btn btn-dark">Guardar</button>
		</form>
	</div>
	<div class="col">
		<table class="table table-borderless border-dark table-hover m-4">
			<thead class="bg-dark text-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Apellido</th>
					<th scope="col">Accion</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($registros as $row): ?>
				<tr class="align-middle">
					<th scope="row"><?php echo $row[0] ?></th>
					<td><?php echo $row[1] ?></td>
					<td><?php echo $row[2] ?></td>
					<td>
						<div class="btn-group">
							<a href="edit.php?id=<?php echo $row[0] ?>" class="btn btn-primary">Editar</a>
							<a href="delete.php?id=<?php echo $row[0] ?>" class="btn btn-danger">Eliminar</a>
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>