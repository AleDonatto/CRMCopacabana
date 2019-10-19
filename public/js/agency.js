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
})