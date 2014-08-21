<?php include 'includes/funtions.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Instituto</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="scripts/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="scripts/main.js"></script>
</head>
<body>
	<div class="container">
		<div id="tabs">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
			  <li class="active"><a href="#nuevo" role="tab" data-toggle="tab">Nuevo Estudiante</a></li>
			  <li><a href="#consultas" role="tab" data-toggle="tab">Consultas</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="nuevo"><?php include 'contents/new.php'; ?></div>
			  	<div class="tab-pane" id="consultas"><?php include 'contents/querys.php'; ?></div>
			</div>
		</div>
	</div>
</body>
</html>