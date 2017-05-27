function modalNewUsu() {

    $('#modalNew').modal('show');
    $('#titulo_lt').text("Crear");

    $("#id").val('');
  	$("#id").attr('readonly',false);

  	$("#dni").val('');
  	$("#dni").attr('readonly',false);

  	$("#nombres").val('');
  	$("#nombres").attr('readonly',false);

  	$("#apellidos").val('');
  	$("#apellidos").attr('readonly',false);

    $('#oli_contrasenia').hide();

    $('#editar').hide();
    $('#enviar').show();
}

function modalDetailsUsu(id){

	$('#editar').hide();
    $('#enviar').hide();
    $('#oli_contrasenia').show();

	var url = "getUsuarioById.php";

	$.post( url, { id: id })
		.done(function( data ) {

		var result = jQuery.parseJSON(data);

	  	$("#id").val(result.id);
  		$("#id").attr('readonly',false);

	  	$("#dni").val(result.dni);
	  	$("#dni").attr('readonly',true);

	  	$("#nombres").val(result.nombres);
	  	$("#nombres").attr('readonly',true);

	  	$("#apellidos").val(result.apellidos);
	  	$("#apellidos").attr('readonly',true);

	  	$("#contrasenia").val(result.contrasenia);
	  	$("#contrasenia").attr('readonly',true);

	  	console.log(result);

	}).error(function(dt){
	  	console.log(dt);
	});
    
    $('#modalNew').modal('show');
    $('#titulo_lt').text("Datos del");
}

function modalEditUsu(id) {

	$('#editar').show();
    $('#enviar').hide();
    
    $('#oli_contrasenia').show();

	var url = "getUsuarioById.php";

	$.post( url, { id: id })
		.done(function( data ) {

		var result = jQuery.parseJSON(data);

	  	$("#id").val(result.id);
  		$("#id").attr('readonly',false);

	  	$("#dni").val(result.dni);
	  	$("#dni").attr('readonly',true);

	  	$("#nombres").val(result.nombres);
	  	$("#nombres").attr('readonly',true);

	  	$("#apellidos").val(result.apellidos);
	  	$("#apellidos").attr('readonly',true);

  		$("#contrasenia").val(result.contrasenia);
	  	$("#contrasenia").attr('readonly',false);

	  	console.log(result);

	}).error(function(dt){
	  	console.log(dt);
	});
    
    $('#modalNew').modal('show');
    $('#titulo_lt').text("Editar");

}

function EliminarUsu(id){

	var url = "EliminarUsuarioById.php";
	$.post( url, { id: id })
	.done(function(data){

		if(data == 1){

			alert('Se elimino');

			window.location = 'Usuario.php';

		}else{
			alert('Ocurrio un error al eliminar , comuníquse con el área de sistemas');
		}

		console.log(data);
	});
}