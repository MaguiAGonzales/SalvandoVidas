<?php
$id = $_POST['id'];
 
include('conexion.php');

	$query = "SELECT * FROM usuarioweb where dni = $id";

	$consul = $conexion->query($query) ;

	$registro = $consul->fetch_assoc();

	echo json_encode($registro);
?>