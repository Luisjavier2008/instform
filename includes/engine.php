<?php 
include 'funtions.php';
if($_POST){
	if(isset($_POST["new"])){
		$txtNombre = $_POST["txtNombre"];
		$selUniversidad = $_POST["selUniversidad"];
		$txtTelefono = $_POST["txtTelefono"];
		$txtDireccion = $_POST["txtDireccion"];
		$txtcorreo = $_POST["txtCorreo"];
		$txtNota = $_POST["txtNota"];
		$optionsRadios = $_POST["optionsRadios"];
		inserting("estudiantes", "`nombre`, `universidad`, `telefono`, `direccion`, `correo`, `nota`, `status`"
			, "nombre=$txtNombre, universidad=$selUniversidad, telefono=$txtTelefono, direccion=$txtDireccion, correo=$txtCorreo, nota=$txtNota, status=$optionsRadios"
			);
	
	}

}
 ?>