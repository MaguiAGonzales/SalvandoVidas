<?php

	include('conexion.php');
	$sub_query = '';
	$query = "";

	$query = "SELECT * FROM evento ORDER BY id_evento ASC";

	

	 if(isset($_POST["buscar"])){

	 	$descripcion = $_POST["filtroDescripcion"];

	 	$query = "SELECT * FROM evento where (titulo LIKE '%$descripcion%' or descripcion = '$descripcion') ORDER BY id_evento ASC";

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
					        <th>Título</th>
					        <th>Fecha</th>
					        <th>Hora</th>
					        <th>Lugar</th>
					        <th>Opciones</th>
					      </tr>
					    </thead> 
					    <tbody>
					<?php
						while ($registro = $consul->fetch_assoc()) {
						?>
						<tr>
							<td><?= $registro['id_evento'] ?></td>
							<td><?= $registro['titulo'] ?></td>
							<td><?= $registro['fecha'] ?></td>
							<td><?= $registro['hora'] ?></td>
							<td><?= $registro['lugar'] ?></td>
							<td>
								
								<button href="" class="btn btn-info btn-sm"
								 onclick="modalDetailsEven(<?= $registro['id_evento'] ?>)"> <i class="fa fa-file-text-o"></i></button>
								
								<button href="" class="btn btn-warning btn-sm"
								 onclick="modalEditEven(<?= $registro['id_evento'] ?>)"> <i class="fa fa-edit"></i></button>
									
								 <button href="" class="btn btn-danger btn-sm"
								 onclick="EliminarEven(<?= $registro['id_evento'] ?>)"> <i class="fa fa-remove"></i></button>
												
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




