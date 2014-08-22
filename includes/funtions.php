<?php
include 'conexion.php';

######################### aqui estan todas las funciones ######################### 



function resultToArray($result){
	$results = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $results[] = $row;
    }

    return $results;

}


// columna, tabla, columna=valor
function select($from, $colum = "*", $where = NULL){
	global $link;
	if($where != NULL){
		$sql = "SELECT ".$colum." FROM ".$from." WHERE ".$where;
	}else{
		$sql = "SELECT ".$colum." FROM ".$from;
	}
	//return $sql;
	$data = mysqli_query($link,$sql) or die ("Error en la consulta");
	return $data;


}


function grid_query($data){
	$students = "";
	while($row = mysqli_fetch_array($data)){
				$students = $students."<tr>
							<td>$row[nombre]</td>
							<td>$row[universidad]</td>
							<td>$row[status]</td>
							<td class='danger' onclick = 'return confirma();'><a href='?delete=$row[id]'>Borrar</a></td>
							<td class='success'><a href='?edit=$row[id]'>Editar</a></td>
						</tr>"; 
	}
	if($students == ""){
		return "<tr><td colspan='5'>No se encontro ningun resultado</td></tr>";
	}
	return  $students;
}


function inserting($into, $colum, $values){
	global $link;
	$sql = "INSERT INTO ".$into." (".$colum.") VALUES (".$values.")";
	$data = mysqli_query($link,$sql) or die ("Error en la consulta");
	is_data_rec($data,"Estudiante Guardado Correctamente","Ocurrio un error");
	
}


function is_data_rec($data,$msg_true, $msg_false){
	$index_msg = "location:index.php?msg=";
	//header($index_msg.$msg_true);
	if($data){
		header($index_msg.$msg_true);
	}else{
		header($index_msg.$msg_false);
	}
}

function delete_q($from, $where){
	global $link;
	//print_r($_GET);
	$sql = "DELETE FROM ".$from." WHERE " . $where;
	//echo $sql;
	$data = mysqli_query($link,$sql) or die ("Error en la consulta");
	is_data_rec($data,"Estudiante Elimnado Correctamente","Ocurrio un error");
}


function update($table, $colums, $where){
	global $link;
	$sql = "UPDATE ".$table." SET ".$colums." WHERE ".$where;
	$data = mysqli_query($link,$sql) or die ("Error en la consulta");
	is_data_rec($data,"Estudiante Editado Correctamente","Ocurrio un error");
	
}



?>

