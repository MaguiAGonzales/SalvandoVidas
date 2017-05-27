<?php
$id = $_POST['id'];
 
include('conexion.php');

	$query = "SELECT * FROM evento where id_evento = $id";

	$consul = $conexion->query($query) ;

	$registro = $consul->fetch_assoc();

	echo json_encode($registro);
?>