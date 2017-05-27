function modalNewEven() {

    $('#modalNew').modal('show');
    $('#titulo_lt').text("Agregar");

    $("#id_evento").val('');
  	$("#id_evento").attr('readonly',false);

  	$("#titulo").val('');
  	$("#titulo").attr('readonly',false);

  	$("#descripcion").val('');
  	$("#descripcion").attr('readonly',false);

  	$("#fecha").val('');
  	$("#fecha").attr('readonly',false);

  	$("#hora").val('');
  	$("#hora").attr('readonly',false);

  	$("#lugar").val('');
  	$("#lugar").attr('readonly',false);

  	$("#referencias").val('');
  	$("#referencias").attr('readonly',false);

    $('#editar').hide();
    $('#enviar').show();
}
function modalDetailsEven(id){

  $('#editar').hide();
    $('#enviar').hide();

  var url = "getEventoById.php";

  $.post( url, { id: id })
    .done(function( data ) {

    var result = jQuery.parseJSON(data);

      $("#id_evento").val(result.id_evento);
      $("#id_evento").attr('readonly',true);

      $("#titulo").val(result.titulo);
      $("#titulo").attr('readonly',true);

      $("#descripcion").val(result.descripcion);
      $("#descripcion").attr('readonly',true);

      $("#fecha").val(result.fecha);
      $("#fecha").attr('readonly',true);

      $("#hora").val(result.hora);
      $("#hora").attr('readonly',true);

      $("#lugar").val(result.lugar);
      $("#lugar").attr('readonly',true);

      $("#referencias").val(result.referencias);
      $("#referencias").attr('readonly',true);

      console.log(result);

  }).error(function(dt){
      console.log(dt);
  });
    
    $('#modalNew').modal('show');
    $('#titulo_lt').text("Datos del");
}

function modalEditEven(id) {

  $('#editar').show();
    $('#enviar').hide();

   var url = "getEventoById.php";

  $.post( url, { id: id })
    .done(function( data ) {

    var result = jQuery.parseJSON(data);

      $("#id_evento").val(result.id_evento);
      $("#id_evento").attr('readonly',true);

      $("#titulo").val(result.titulo);
      $("#titulo").attr('readonly',true);

      $("#descripcion").val(result.descripcion);
      $("#descripcion").attr('readonly',true);

      $("#fecha").val(result.fecha);
      $("#fecha").attr('readonly',false);

      $("#hora").val(result.hora);
      $("#hora").attr('readonly',false);

      $("#lugar").val(result.lugar);
      $("#lugar").attr('readonly',false);

      $("#referencias").val(result.referencias);
      $("#referencias").attr('readonly',false);


      console.log(result);

  }).error(function(dt){
      console.log(dt);
  });
    
    $('#modalNew').modal('show');
    $('#titulo_lt').text("Editar");

}

function EliminarEven(id){

  var url = "EliminarEventoById.php";
  $.post( url, { id: id })
  .done(function(data){

    if(data == 1){

      alert('Se elimino');

      window.location = 'Evento.php';

    }else{
      alert('Ocurrio un error al eliminar , comuníquse con el área de sistemas');
    }

    console.log(data);
  });
}