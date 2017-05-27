<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
	        <h3 class="box-title"> <span id="titulo_lt"></span> Mascota</h3>
        </div>
        <form class="form-horizontal" id="agregar_usuario" name="agregar_frm"  method="post" enctype="multipart/form-data">
            <div class="box-body">
            
                <input id="id_mascota" name="id_mascota" type="hidden" >
                
                 <div class="col-md-12">
                    <div class="form-group">
                        <label for="estado" class="col-sm-8 control-label">Estado</label>
                        <div class="col-sm-4">
                           <select id="estado" name="estado" class="form-control" required>
                                <option value="">Elija</option>
                                <option value="Nuevo">Nuevo</option>
                                <option value="En proceso">En proceso</option>
                                <option value="Adoptado">Adoptado</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="box-title" align="center" >
                        <h5 class="box-title"><b>Foto</b></h3>
                    </div>
                </div>               

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre de la Mascota" pattern="[a-Z]" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tipo_mascota" class="col-sm-4 control-label">Tipo</label>
                        <div class="col-sm-8">
                           <select id="tipo_mascota" name="tipo_mascota" class="form-control" required>
                                <option value="">Elija</option>
                                <option value="perro">Perro</option>
                                <option value="gato">Gato</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tamanio" class="col-sm-4 control-label">Tamaño</label>
                        <div class="col-sm-8">
                           <select id="tamanio" name="tamanio" class="form-control" required>
                                <option value="">Elija</option>
                                <option value="pequenio">Pequeño</option>
                                <option value="mediano">Mediano</option>
                                <option value="grande">Grande</option>
                            </select>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edad" class="col-sm-4 control-label">Edad aprox.</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingrese edad aprox. de la Mascota " required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sexo" class="col-sm-4 control-label">Sexo</label>
                        <div class="col-sm-8">
                           <select id="sexo" name="sexo" class="form-control" required>
                                <option value="">Elija</option>
                                <option value="hembra">Hembra</option>
                                <option value="macho">Macho</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fecha" class="col-sm-4 control-label">Fecha</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese fecha de ingreso " required>
                        </div>
                    </div>
                    
                </div>    
                    
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="salud" class="col-sm-2 control-label">Salud</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="salud" name="salud" placeholder="Ingrese datos de la salud de la Mascota" required>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="particularidades" class="col-sm-2 control-label">Particularidades</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="particularidades" name="particularidades" placeholder="Ingrese datos de las características de la Mascota" required>
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

        $estado=$_POST["estado"];
        $nombre=$_POST["nombre"];
        $tipo_mascota=$_POST["tipo_mascota"];
        $tamanio=$_POST["tamanio"];
        $edad=$_POST["edad"];
        $sexo=$_POST["sexo"];
        $salud=$_POST["salud"];
        $particularidades=$_POST["particularidades"];

        include ("conexion.php");
           
            $consulta="INSERT INTO mascotaweb(estado, nombre, tipo_mascota, tamanio, edad, sexo, salud, particularidades) VALUES ('$estado', '$nombre', '$tipo_mascota', '$tamanio', '$edad', '$sexo', '$salud', '$particularidades')";
            
            $ejecutar_consulta=$conexion->query($consulta);
            if ($ejecutar_consulta) {
            echo "<script> alert('Mascota Registrado');</script>";
            }
            else{
                echo "<script> alert('Mascota No Registrado');</script>";
            }
    }


    if(isset($_REQUEST["editar_sb"])){
    
        $id_mascota=$_POST["id_mascota"];
        $estado=$_POST["estado"];
        $nombre=$_POST["nombre"];
        $tipo_mascota=$_POST["tipo_mascota"];
        $tamanio=$_POST["tamanio"];
        $edad=$_POST["edad"];
        $sexo=$_POST["sexo"];
        $salud=$_POST["salud"];
        $particularidades=$_POST["particularidades"];

        include ("conexion.php");
    
        $consulta="UPDATE mascotaweb SET estado = '$estado', nombre = '$nombre', tipo_mascota = '$tipo_mascota', tamanio = '$tamanio', edad = '$edad', sexo = '$sexo', salud = '$salud', particularidades = '$particularidades' where id_mascota = '$id_mascota'";
 
        $ejecutar_consulta=$conexion->query($consulta);
    
        if ($ejecutar_consulta) {
            echo "<script> alert('Mascota Actualizado');</script>";
        }
        else{
            echo "<script> alert('Mascota No Actualizado');</script>";
        }
    }
?>