<?php include 'conexion.php'; 

function resultToArray($row){
	$results = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $results[] = $row;
    }

    return $results;

}


// columna, tabla, columna=valor
function select($from, $colum = "*", $where = NULL){
	
	if($where != NULL){
		$sql = "SELECT ".$colum." FROM ".$from." Where ".$where;
	}else{
		$sql = "SELECT ".$colum." FROM ".$from;
	}

	try {
	    $data = mysqli_query($sql); 
	} catch (Exception $e) {
   		echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		return NULL;
	}

	return true;
}


function inserting($into, $colum, $values){
	
	$sql = "INSERT INTO ".$into." (".$colum.") VALUES (".$values.")";

	try {
	    $data = mysqli_query($sql);
	} catch (Exception $e) {
   		echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		return;
	}

	return "Succes";
}

function delete($from, $where){
	
	$sql = "DELETE FROM ".$from." WHERE".$where;

	try {
	    $data = mysqli_query($sql);
	    	//or die(""); 
	} catch (Exception $e) {
   		echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		return;
	}

	return "Succes";
}


function update($table, $colums, $where){
	
	$sql = "UPDATE ".$table." SET ".$colums." WHERE ".$where;
	try {
	    $data = mysqli_query($sql);
	    	//or die(""); 
	} catch (Exception $e) {
   		echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		return;
	}
	return "Succes";
}



?>