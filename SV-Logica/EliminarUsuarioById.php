<?php
	
	$id = $_POST['id'];
 
	include('conexion.php');

	$query = "DELETE FROM usuarioweb where id= $id";

	$consul = $conexion->query($query);

	if($consul == 1){

		echo "1";

	}else{
		echo "no";
	}
?>