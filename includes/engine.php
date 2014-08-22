<?php 
######################### aqui manejo todas las peticiones ###############################

include 'funtions.php';
#MANEJANDO PETICIONES POST
if($_POST){ 
	//Nuevos Estudiantes
	if(isset($_POST["new"])){
		$txtNombre = htmlspecialchars ($_POST["txtNombre"]);
		$selUniversidad = $_POST["selUniversidad"];
		$txtTelefono = $_POST["txtTelefono"];
		$txtDireccion = $_POST["txtDireccion"];
		$txtCorreo = $_POST["txtCorreo"];
		$txtNota = $_POST["txtNota"];
		$optionsRadios = $_POST["optionsRadios"];
		if(isset($_POST["SaveEdit"])){
			update("estudiante", " `nombre`='$txtNombre',`universidad`='$selUniversidad',`telefono`='$txtTelefono',`direccion`='$txtDireccion',`correo`='$txtCorreo',`nota`='$txtNota',`status`='$optionsRadios'"
			, "id = $_POST[id]");

		}else{
			inserting("estudiante", "`nombre`, `universidad`, `telefono`, `direccion`, `correo`, `nota`, `status`"
				, "'$txtNombre', '$selUniversidad', '$txtTelefono', '$txtDireccion', '$txtCorreo', '$txtNota', '$optionsRadios'"
				);
		}
	
	}
//busqueda
	if(isset($_POST["query"])){
		//busca por universidad

		$students = ""; 
		if($_POST["optionsRadios"] == "filtUni"){
			$students = grid_query(select("estudiante", "*", " universidad = '$_POST[selUniversidad]'"));
			
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

}

#MANEJANDO PETICIONES GET

if(isset($_GET)){
	if(isset($_GET["edit"])){
		$tabControl = "activaTab('edit');";
	}else{
		$tabControl = "";
	}

	//ELIMINA REGISTRO
	if(isset($_GET["delete"])){
		delete_q("estudiante",  "id = '$_GET[delete])'");
	}	

	//SELECIONA ESTUDIANTE PARA EDITAR
	if(isset($_GET["edit"])){
		$student = mysqli_fetch_array(select("estudiante", "*", "id = '$_GET[edit]'"));
		$status = array(
    		"Activo" => "",
    		"En Espera" => "",
    		"Promovido A Intellisys" => "",
    		"Reprobado" => "",
    		"Disponible para intellisys" => "");

		$status[$student["status"]] = "checked";
		//print_r($status);
    }

    	

	//MENSAJE DE STATUS
	if(isset($_GET["msg"])){
			$msg = $_GET["msg"] ;
	}
}
 ?>