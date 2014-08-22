<?php include 'conexion.php'; 

######################### aqui estan todas las funciones ######################### 


function resultToArray($row){
	$results = array();
    while($row = mysql_fetch_assoc($result))
    {
        $results[] = $row;
    }

    return $results;

}


// columna, tabla, columna=valor
function select($from, $colum = "*", $where = NULL){
	
	if($where != NULL){
		$sql = "SELECT ".$colum." FROM ".$from." WHERE ".$where;
	}else{
		$sql = "SELECT ".$colum." FROM ".$from;
	}
	//return $sql;
	$data = mysql_query($sql) or die ("Error en la consulta");
	return $data;


}


function grid_query($data){
	$students = "";
	while($row = mysql_fetch_array($data)){
				$students = $students."<tr>
							<td>$row[nombre]</td>
							<td>$row[universidad]</td>
							<td>$row[status]</td>
							<td class='danger'><a href='engine.php?delete=$row[id]'>Borrar</a></td>
							<td class='success'><a href='engine.php?edit=$row[id]'>Editar</a></td>
						</tr>"; 
	}

	return  $students;
}


function inserting($into, $colum, $values){
	
	$sql = "INSERT INTO ".$into." (".$colum.") VALUES (".$values.")";
	$data = mysql_query($sql) or die ("Error en la consulta");
	is_data_rec("Estudiante Guardado Correctamente","Ocurrio un error");
	
}


function is_data_rec($data,$msg_true, $msg_false){
	$index_msg = "location:index.php?msg=";
	header($index_msg.$msg_true);
	// if($data){
	// 	header($index_msg.$msg_true);
	// }else{
	// 	header($index_msg.$msg_false);
	// }
}

function delete($from, $where){
	
	$sql = "DELETE FROM ".$from." WHERE".$where;

	try {
	    $data = mysql_query($sql);
	    	//or die(""); 
	} catch (Exception $e) {
   		echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		return;
	}

	return "Succes";
}


function update($table, $colums, $where){
	
	$sql = "UPDATE ".$table." SET ".$colums." WHERE ".$where;

	$data = mysql_query($sql) or die ("Error en la consulta");
	is_data_rec("Estudiante Editado Correctamente","Ocurrio un error");
	
}



?>