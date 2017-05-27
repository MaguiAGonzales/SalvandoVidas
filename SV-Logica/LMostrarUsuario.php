<?php

	include('conexion.php');
	$sub_query = '';
	$query = "";

	$query = "SELECT * FROM usuarioweb ORDER BY dni ASC";

	 if(isset($_POST["buscar"])){

	 	$descripcion = $_POST["filtroDescripcion"];

	 	$query = "SELECT * FROM usuarioweb where (CONCAT(nombres,' ',apellidos) LIKE '%$descripcion%' OR dni = '$descripcion') ORDER BY dni ASC ";

	}

	$consul = $conexion->query($query) ;
?>

<div class="col-md-12">
    <div class="box box-info">
    	<div class="box-body">
            <input type="hidden" name="buscar" value="buscar">
            <div class="row">
				<div class="col-sm-12">
					<table  class="table table-bordered table-hover">
					    <thead>
					      <tr>
					        <th>Dni</th>
					        <th>Nombres Completos</th>
					        <th>Opciones</th>
					      </tr>
					    </thead> 
					    <tbody>
					<?php
						while ($registro = $consul->fetch_assoc()) {
						?>
						<tr>
							<td><?= $registro['dni'] ?></td>
							<td><?= $registro['nombres']?> <?= $registro['apellidos']?></td>
							<td>
								
								<button href="" class="btn btn-info btn-sm"
								 onclick="modalDetailsUsu(<?= $registro['dni'] ?>)"> <i class="fa fa-file-text-o"></i></button>
								
								<button href="" class="btn btn-warning btn-sm"
								 onclick="modalEditUsu(<?= $registro['dni'] ?>)"> <i class="fa fa-edit"></i></button>
									
								 <button href="" class="btn btn-danger btn-sm"
								 onclick="EliminarUsu(<?= $registro['dni'] ?>)"> <i class="fa fa-remove"></i></button>
												
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

<div class="col-sm-12">
	
	
</div>