<?php
	
	$id = $_POST['id'];
 
	include('conexion.php');

	$query = "DELETE FROM usuarioweb where dni= $id";

	$consul = $conexion->query($query);

	if($consul == 1){

		echo "1";

	}else{
		echo "no";
	}
?>