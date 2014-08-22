<?php 
$host = "localhost";
$user  = "root";
$password = "";
$database = "instform";

$link = mysqli_connect($host,$user,$password,$database) or die("Error " . mysqli_error($link));

// $conexion = mysqli_connect($host,$user,$password) or die ("error en la conexion".mysqli_error());
// mysqli_select_db($database,$conexion);
// my

?>