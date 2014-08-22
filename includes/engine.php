<?php 
######################### aqui manejo todas las peticiones ###############################

include 'funtions.php';
//Nuevos Estudiantes
if($_POST){ 
	if(isset($_POST["new"])){
		$txtNombre = $_POST["txtNombre"];
		$selUniversidad = $_POST["selUniversidad"];
		$txtTelefono = $_POST["txtTelefono"];
		$txtDireccion = $_POST["txtDireccion"];
		$txtCorreo = $_POST["txtCorreo"];
		$txtNota = $_POST["txtNota"];
		$optionsRadios = $_POST["optionsRadios"];
		inserting("estudiante", "`nombre`, `universidad`, `telefono`, `direccion`, `correo`, `nota`, `status`"
			, "'$txtNombre', '$selUniversidad', '$txtTelefono', '$txtDireccion', '$txtCorreo', '$txtNota', '$optionsRadios'"
			);
	
	}
//busqueda
	if(isset($_POST["query"])){
		//busca por universidad
		$students = ""; 
		if($_POST["optionsRadios"] == "fil	tUni"){

		}
		else{ //busca por optionsRadios
			$students = grid_query(select("estudiante", "*", "status = '$_POST[optionsRadios]'"));
		}
		//echo $students;
	
	}


	//filtra los resultados por nombre
	if(isset($_POST["queryFilter"])){
		if($_POST["optionsRadios"] = "filtUni"){

		}
	}

	if(isset($_GET["msg"])){
			$msg = $_GET["msg"] ;
	}

}
 ?>