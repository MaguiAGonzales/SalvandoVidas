<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
	        <h3 class="box-title"> <span id="titulo_lt"></span> Eventos</h3>
        </div>
        <form class="form-horizontal" id="agregar_usuario" name="agregar_frm"  method="post" enctype="multipart/form-data">
            <div class="box-body">
            
                <input id="id_evento" name="id_evento" type="hidden" >
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="titulo" class="col-sm-4 control-label">Título</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el Título del Evento" pattern="[a-Z]" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="descripcion" class="col-sm-4 control-label">Descripción</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese la Descripción del Evento" pattern="[a-Z]" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fecha" class="col-sm-4 control-label">Fecha</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese fecha de ingreso " required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="hora" class="col-sm-4 control-label">Hora</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="hora" name="hora" placeholder="Ingrese la Hora del Evento" pattern="[a-Z]" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lugar" class="col-sm-4 control-label">Lugar</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Ingrese el Lugar del Evento" pattern="[a-Z]" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="referencias" class="col-sm-4 control-label">Referencias</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="referencias" name="referencias" placeholder="Ingrese Referencias del Evento" pattern="[a-Z]" required>
                        </div>
                    </div>                   
                </div>

             	<div class="col-md-12">
                 	<div class="box-footer" align="center">
                 		<button type="submit" id="enviar" name="enviar_sb" value="Guardar" class="btn btn-success">Guardar</button>
                        
                        <button type="submit" id="editar" name="editar_sb" value="Editar" class="btn btn-success">Editar</button > 
                    </div>
                </div>
            </div>
        </form>
  	</div>
</div>
<?php  
    if(isset($_REQUEST['enviar_sb'])){

        $titulo=$_POST["titulo"];
        $descripcion=$_POST["descripcion"];
        $fecha=$_POST["fecha"];
        $hora=$_POST["hora"];
        $lugar=$_POST["lugar"];
        $referencias=$_POST["referencias"];

        include ("conexion.php");
           
            $consulta="INSERT INTO evento(titulo, descripcion, fecha, hora, lugar, referencias) VALUES ('$titulo', '$descripcion', '$fecha', '$hora', '$lugar', '$referencias')";
            
            $ejecutar_consulta=$conexion->query($consulta);
            if ($ejecutar_consulta) {
            echo "<script> alert('Evento Registrado');</script>";
            }
            else{
                echo "<script> alert('Evento No Registrado');</script>";
            }
    }


    if(isset($_REQUEST["editar_sb"])){
    
        $id_evento=$_POST["id_evento"];
        $fecha=$_POST["fecha"];
        $hora=$_POST["hora"];
        $lugar=$_POST["lugar"];
        $referencias=$_POST["referencias"];

        include ("conexion.php");
    
        $consulta="UPDATE evento SET fecha = '$fecha', hora = '$hora', lugar = '$lugar', referencias = '$referencias' where id_evento = '$id_evento'";
 
        $ejecutar_consulta=$conexion->query($consulta);
    
        if ($ejecutar_consulta) {
            echo "<script> alert('Evento Actualizado');</script>";
        }
        else{
            echo "<script> alert('Evento No Actualizado');</script>";
        }
    }
?>