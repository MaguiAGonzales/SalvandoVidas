function modalNewMas() {

    $('#modalNew').modal('show');
    $('#titulo_lt').text("Agregar");

    $("#id_mascota").val('');
  	$("#id_mascota").attr('readonly',false);

  	$("#estado").val('');
  	$("#estado").attr('readonly',false);

  	$("#nombre").val('');
  	$("#nombre").attr('readonly',false);

  	$("#tipo_mascota").val('');
  	$("#tipo_mascota").attr('readonly',false);

  	$("#tamanio").val('');
  	$("#tamanio").attr('readonly',false);

  	$("#edad").val('');
  	$("#edad").attr('readonly',false);

  	$("#sexo").val('');
  	$("#sexo").attr('readonly',false);

  	$("#salud").val('');
  	$("#salud").attr('readonly',false);

    $("#fecha").val('');
    $("#fecha").attr('readonly',false);

  	$("#particularidades").val('');
  	$("#particularidades").attr('readonly', false);

    $('#editar').hide();
    $('#enviar').show();
}
function modalDetailsMas(id){

  $('#editar').hide();
    $('#enviar').hide();

  var url = "getMascotaById.php";

  $.post( url, { id: id })
    .done(function( data ) {

    var result = jQuery.parseJSON(data);

      $("#id_mascota").val(result.id_mascota);
      $("#id_mascota").attr('readonly',true);

      $("#estado").val(result.estado);
      $("#estado").attr('readonly',true);

      $("#nombre").val(result.nombre);
      $("#nombre").attr('readonly',true);

      $("#tipo_mascota").val(result.tipo_mascota);
      $("#tipo_mascota").attr('readonly',true);

      $("#tamanio").val(result.tamanio);
      $("#tamanio").attr('readonly',true);

      $("#edad").val(result.edad);
      $("#edad").attr('readonly',true);

      $("#sexo").val(result.sexo);
      $("#sexo").attr('readonly',true);

      $("#salud").val(result.salud);
      $("#salud").attr('readonly',true);

      $("#fecha").val(result.fecha);
      $("#fecha").attr('readonly',true);

      $("#particularidades").val(result.particularidades);
      $("#particularidades").attr('readonly', true);
      console.log(result);

  }).error(function(dt){
      console.log(dt);
  });
    
    $('#modalNew').modal('show');
    $('#titulo_lt').text("Datos del");
}

function modalEditMas(id) {

  $('#editar').show();
    $('#enviar').hide();

   var url = "getMascotaById.php";

  $.post( url, { id: id })
    .done(function( data ) {

    var result = jQuery.parseJSON(data);


      $("#id_mascota").val(result.id_mascota);
      $("#id_mascota").attr('readonly',true);

      $("#estado").val(result.estado);
      $("#estado").attr('readonly',false);

      $("#nombre").val(result.nombre);
      $("#nombre").attr('readonly',false);

      $("#tipo_mascota").val(result.tipo_mascota);
      $("#tipo_mascota").attr('readonly',true);

      $("#tamanio").val(result.tamanio);
      $("#tamanio").attr('readonly',true);

      $("#edad").val(result.edad);
      $("#edad").attr('readonly',false);

      $("#sexo").val(result.sexo);
      $("#sexo").attr('readonly',true);

      $("#salud").val(result.salud);
      $("#salud").attr('readonly',false);

      $("#fecha").val(result.fecha);
      $("#fecha").attr('readonly',true);

      $("#particularidades").val(result.particularidades);
      $("#particularidades").attr('readonly', false);

      console.log(result);

  }).error(function(dt){
      console.log(dt);
  });
    
    $('#modalNew').modal('show');
    $('#titulo_lt').text("Editar");

}

function EliminarMas(id){

  var url = "EliminarMascotaById.php";
  $.post( url, { id: id })
  .done(function(data){

    if(data == 1){

      alert('Se elimino');

      window.location = 'Mascota.php';

    }else{
      alert('Ocurrio un error al eliminar , comuníquse con el área de sistemas');
    }

    console.log(data);
  });
}