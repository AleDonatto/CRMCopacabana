$(document).ready(function () {
  $('#dtHorizontalExample').DataTable({
  "scrollX": true
  });
  $('.dataTables_length').addClass('bs-select');
  });

$('#exampleModal').on('show.bs.modal', function(event){
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var nombre = button.data('nombre')
    var Apaterno = button.data('paterno')
    var Amaterno = button.data('materno')
    var profesion = button.data('profesion')
    var fecha = button.data('fecha')
    var telefono = button.data('telefono')
    var celular = button.data('celular')
    var correo = button.data('correo')
    var direccion = button.data('direccion')
    var cp = button.data('cp')
    var ciudad = button.data('ciudad')
    var estado = button.data('estado')
    var pais = button.data('pais')
    var tcliente = button.data('tcliente')

    var modal = $(this)
    //modal.find('.modal-title').text('')
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #nombre').val(nombre);
    modal.find('.modal-body #paterno').val(Apaterno);
    modal.find('.modal-body #materno').val(Amaterno);
    modal.find('.modal-body #profesion').val(profesion);
    modal.find('.modal-body #fecha').val(fecha);
    modal.find('.modal-body #telefono').val(telefono);
    modal.find('.modal-body #celular').val(celular);
    modal.find('.modal-body #correo').val(correo);
    modal.find('.modal-body #direccion').val(direccion);
    modal.find('.modal-body #cp').val(cp);
    modal.find('.modal-body #ciudad').val(ciudad);
    modal.find('.modal-body #estado').val(estado);
    modal.find('.modal-body #pais').val(pais);
    modal.find('.modal-body #tcliente').val(tcliente);
});

$('#exampleModalUser').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var iduser = button.data('id')
  var nombre = button.data('nombre')
  var apellidos = button.data('apellidos')
  var nick = button.data('nick')
  var grupos = button.data('pgrupos')
  var recepcion = button.data('precepcion')
  var clientes = button.data('pclientes')
  var admin = button.data('padmin')

  var modal=$(this)
  modal.find('.modal-body #id').val(iduser)
  modal.find('.modal-body #nombre').val(nombre)
  modal.find('.modal-body #apellidos').val(apellidos)
  modal.find('.modal-body #nick').val(nick)

  if(grupos == 'yes'){
    modal.find('.modal-body #permisoR').prop('checked',true)
  }
  if(recepcion == 'yes'){
    modal.find('.modal-body #permisoVG').prop('checked',true)
  }
  if(clientes == 'yes'){
    modal.find('.modal-body #permisoCD').prop('checked',true)
  }
  if(admin == 'yes'){
    modal.find('.modal-body #permisoA').prop('checked',true)
  }
});

$('#exampleModalUserdelete').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var id = button.data('id')

  var modal=$(this)
  modal.find('.modal-body #id').val(id)
});


$('#ModalEditCotizacion').on('show.bs.modal', function(event){
  var button = $(event.relatedTarget)
  var idGrupo = button.data('grupo')
  var nombregrupo = button.data('nombregrupo')
  var fInicio = button.data('fechainicio')
  var fFin = button.data('fechafin')
  var habitaciones = button.data('habitaciones')

  var modal=$(this)
  modal.find('.modal-body #grupo').val(idGrupo);
  modal.find('.modal-body #nombregrupo').val(nombregrupo);
  modal.find('.modal-body #fechainicio').val(fInicio);
  modal.find('.modal-body #fechafin').val(fFin);
  modal.find('.modal-body #habitaciones').val(habitaciones);
});

$('#modalSalones').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var idcotizacion = button.data('idcotizacion')

  var modal=$(this)
  modal.find('.modal-body #idcotizacion').val(idcotizacion);
});

$('#modalEditSalones').on('show.bs.modal', function(event){
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var grupo = button.data('grupo')
  var fecha = button.data('fecha')
  var horainicio = button.data('horainicio')
  var horafin = button.data('horafin')
  var salon = button.data('salon')

  var modal = $(this)
  modal.find('.modal-body #idcotizacion').val(id);
  modal.find('.modal-body #nombregrupo').val(grupo);
  modal.find('.modal-body #fecha').val(fecha);
  modal.find('.modal-body #hora').val(horainicio);
  modal.find('.modal-body #horafin').val(horafin);
  modal.find('.modal-body #salon').val(salon);
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});




