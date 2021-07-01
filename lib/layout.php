<?php
	$content = "";
	$login = true;
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<div id="root">
		<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
			<div class="container-fluid">
				<a href="index.php" class="navbar-brand">PHP CRUD</a>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#"><?php
							if($login) {
								echo "Logout";
							} else {
								echo "Login";
							};
						?></a>
					</li>
				</ul>
			</div>
		</nav>
		<?php echo $content ?>
	</div>
</body>
</html>