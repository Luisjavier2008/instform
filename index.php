<?php include 'includes/engine.php'; ?>
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
	<script src="scripts/jvalidator/dist/jquery.validate.js"></script>
	<script src="scripts/main.js"></script>
	<script type='text/javascript'><?php if(isset($_POST["query"])){$tabControl = "activaTab('consultas');";}echo $tabControl; ?></script>
	<?php 
		if(isset($_GET["msg"])){
			echo "<script type='text/javascript'>alert('".$_GET["msg"]."');
				redir();</script>";}?>
	
</head>
<body>
	<div class="container">
		<div id="tabs">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
			  <li class="active"><a href="#nuevo" role="tab" data-toggle="tab">Nuevo Estudiante</a></li>
			  <li><a href="#consultas" role="tab" data-toggle="tab">Consultas</a></li>
			  <?php 
			  		if(isset($_GET["edit"])){
			  			echo '<li><a href="#edit" role="tab" data-toggle="tab">Editar</a></li>'; 
			  		}?>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="nuevo"><?php include 'contents/new.php'; ?></div>
			  	<div class="tab-pane" id="consultas"><?php include 'contents/querys.php'; ?></div>

			  	<?php 
			  		if(isset($_GET["edit"])){
			  			echo '<div class="tab-pane" id="edit">'?>
			  			<?php include "contents/edit.php"; ?>
			  		<?php echo '</div>'; 

			  		}
			  	?>
			</div>
		</div>
	</div>
</body>
</html>

