<?php

	include('conexion.php');
	$sub_query = '';
	$query = "";

	$query = "SELECT * FROM mascotaWeb ORDER BY id_mascota ASC";

	

	 if(isset($_POST["buscar"])){

	 	$descripcion = $_POST["filtroDescripcion"];

	 	$query = "SELECT * FROM mascotaWeb where (nombre LIKE '%$descripcion%' or estado = '$descripcion' or tipo_mascota = '$descripcion') ORDER BY id_mascota ASC";

	}

	$consul = $conexion->query($query) ;
?>
<div style="padding: 15px">
 <div class="col-md-12">
    <div class="box box-info">
    	<div class="box-body">
            <input type="hidden" name="buscar" value="buscar">
            <div class="row">
				<div class="col-sm-12">
					<table  class="table table-bordered table-hover">
					    <thead>
					      <tr>
					        <th>Código</th>
					        <th>Nombre</th>
					        <th>Tipo Mascota</th>
					        <th>Estado</th>
					        <th>Opciones</th>
					      </tr>
					    </thead> 
					    <tbody>
					<?php
						while ($registro = $consul->fetch_assoc()) {
						?>
						<tr>
							<td><?= $registro['id_mascota'] ?></td>
							<td><?= $registro['nombre'] ?></td>
							<td><?= $registro['tipo_mascota'] ?></td>
							<td><?= $registro['estado']?></td>
							<td>
								
								<button href="" class="btn btn-info btn-sm"
								 onclick="modalDetailsMas(<?= $registro['id_mascota'] ?>)"> <i class="fa fa-file-text-o"></i></button>
								
								<button href="" class="btn btn-warning btn-sm"
								 onclick="modalEditMas(<?= $registro['id_mascota'] ?>)"> <i class="fa fa-edit"></i></button>
									
								 <button href="" class="btn btn-danger btn-sm"
								 onclick="EliminarMas(<?= $registro['id_mascota'] ?>)"> <i class="fa fa-remove"></i></button>
												
							</td>
						</tr>
							
					<?php } ?>
							
					    </tbody>
					</table>
				</div>
        	</div>
        </div>	
        <div class="box-footer" align="center">
         		
        </div>
        
  	</div>
</div>
</div>

<div class="col-sm-12">
	
	
</div>




