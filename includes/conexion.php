<?php 
$host = "localhost";
$user  = "root";
$password = "";
$database = "instform";


// Conectando, seleccionando la base de datos
$link = mysqli_connect($host, $user, $password) or die('No se pudo conectar: ' . mysqli_error());
mysqli_select_db($link,$database) or die('No se pudo seleccionar la base de datos');


?>