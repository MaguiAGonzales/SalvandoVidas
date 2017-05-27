<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
	        <h3 class="box-title"> <span id="titulo_lt"></span> Usuario</h3>
        </div>
        <form class="form-horizontal" id="agregar_usuario" name="agregar_frm"  method="post" enctype="multipart/form-data">
            <div class="box-body">

            <input id="id" name="id" type="hidden" >

            <div class="col-md-12">
            	<div class="form-group">
                	<label for="dni" class="col-sm-4 control-label">Dni</label>
                	<div class="col-sm-8">
                    	<input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese el número de Dni" title="Ingrese el número de Dni" pattern="[0-9]{8}" required>
                	</div>
            	</div>

            	<div class="form-group">
                	<label for="nombres" class="col-sm-4 control-label">Nombres</label>
                	<div class="col-sm-8">
						<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese el Nombre Completo" title="Ingrese el Nombre Completo" pattern="[a-Z]" required>
                	</div>
            	</div>

            	<div class="form-group">
                	<label for="apellidos" class="col-sm-4 control-label">Apellidos</label>
                	<div class="col-sm-8">
						<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese el Apellido Paterno" title="Ingrese el Apellido Paterno" pattern="[a-Z]" required>
                	</div>
            	</div>

                <div class="form-group" id="oli_contrasenia">
                    <label for="contrasenia" class="col-sm-4 control-label">Contraseña</label>
                    <div class="col-sm-8">
                        <input type="contrasenia" class="form-control" id="contrasenia" name="contrasenia">
                    </div>
                </div>
            </div>

         	<div class="col-md-12">
             	<div class="box-footer" align="center">
             		<button type="submit" id="enviar" name="enviar_sb" value="Guardar" class="btn btn-success">Guardar</button>
                    
                    <button type="submit" id="editar" name="editar_sb" value="Editar" class="btn btn-success">Editar</button > 
                </div>
            </div>

        </form>
  	</div>
</div>
<?php  
    if(isset($_REQUEST['enviar_sb'])){

	$dni=$_POST["dni"];
	$nombres=$_POST["nombres"];
	$apellidos=$_POST["apellidos"];
	
    include ("conexion.php");

	$consulta="INSERT INTO usuarioweb(dni, nombres, apellidos, contrasenia) VALUES ('$dni','$nombres','$apellidos','$dni')";

	$ejecutar_consulta=$conexion->query($consulta);

	if ($ejecutar_consulta) {
			echo "<script> alert('Usuario Registrado');</script>";
		}
		else{
			echo "<script> alert('Usuario No Registrado');</script>";
		}
	}

    if(isset($_REQUEST["editar_sb"])){

    $id=$_POST["id"];
    $contrasenia=$_POST["contrasenia"];

    include ("conexion.php");
    
    $consulta="UPDATE usuarioweb SET contrasenia = '$contrasenia' where id = '$id'";

    $ejecutar_consulta=$conexion->query($consulta);
    
    if ($ejecutar_consulta) {
            echo "<script> alert('Usuario Actualizado');</script>";
        }
        else{
            echo "<script> alert('Usuario No Actualizado');</script>";
        }
    }
?>