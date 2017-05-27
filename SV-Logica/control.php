<?php
if(isset($_REQUEST['enviar_sb'])){
	$usuario=$_POST["buscar_txt"];
	$password=$_POST["pass_txt"];

	include('conexion.php');

		$administrador = "SELECT * FROM usuarioweb WHERE dni = '$usuario' AND contrasenia= '$password'";
		
		$ejecutar_administrador=$conexion->query($administrador);

			if($registro=$ejecutar_administrador->fetch_assoc()) 
			{
			    header("location:Usuario.php");
				session_start();
				$_SESSION["administrador"]=true;
				$_SESSION["adm"]=$usuario;
				Setcookie("tipo", "adm");
			} 
			else 
			{
			   echo "<script> alert('Datos Incorrectos');</script>";
			   header("Location:SV-Presentacion/login.php");
			}
}
?>