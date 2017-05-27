<?php
$id = $_POST['id'];
 
include('conexion.php');

	$query = "SELECT * FROM mascotaweb where id_mascota = $id";

	$consul = $conexion->query($query) ;

	$registro = $consul->fetch_assoc();

	echo json_encode($registro);
?>