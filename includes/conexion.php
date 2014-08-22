<?php 
$host = "localhost";
$user  = "root";
$password = "";
$database = "instform";


$conexion = mysql_connect($host,$user,$password) or die ("error en la conexion".mysql_error());
mysql_select_db($database,$conexion);



?>