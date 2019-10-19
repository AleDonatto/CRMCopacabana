@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10">
    <section class="bg-light page-section">
        <div class="container card">
            <h2 class="text-center font-italic">Lista Clientes</h2>
            <div class="container">
                <div class="car-body">
                    <div class="row">
                    </div>
                </div>
            </div>
            <div class="container">
                <table class="table tabel-striped table-hover table-sm" id="dtHorizontalExample" cellspacing="0" width="100%">
                    <thead>
                        <th scope="col">idCliente</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">A. Paterno</th>
                        <th scope="col">A. Materno</th>
                        <th scope="col">Profesion</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">C.P.</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Tipo de cliente</th>
                        <th scope="col">Opciones</th>
                    </thead>
                    <tbody>
                        @foreach($clientes as $item)
                        <tr>
                            <th scope="col">{{$item->idCliente}}</th>
                            <td>{{$item->Nombre}}</td>
                            <td>{{$item->ApePaterno}}</td>
                            <td>{{$item->ApeMaterno}}</td>
                            <td>{{$item->Profesion}}</td>
                            <td>{{$item->FechaNac}}</td>
                            <td>{{$item->Telefono}}</td>
                            <td>{{$item->Celular}}</td>
                            <td>{{$item->Correo}}</td>
                            <td>{{$item->Domicilio}}</td>
                            <td>{{$item->CP}}</td>
                            <td>{{$item->Ciudad}}</td>
                            <td>{{$item->Estado}}</td>
                            <td>{{$item->Pais}}</td>
                            <td>{{$item->TipoCliente}}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal"
                                data-id="{{$item->idCliente}}" data-nombre="{{$item->Nombre}}" data-paterno="{{$item->ApePaterno}}"
                                data-materno="{{$item->ApeMaterno}}" data-profesion="{{$item->Profesion}}" data-fecha="{{$item->FechaNac}}"
                                data-telefono="{{$item->Telefono}}" data-celular="{{$item->Celular}}" data-correo="{{$item->Correo}}"
                                data-direccion="{{$item->Domicilio}}" data-cp="{{$item->CP}}" data-ciudad="{{$item->Ciudad}}" data-estado="{{$item->Estado}}"
                                data-pais="{{$item->Pais}}" data-tcliente="{{$item->TipoCliente}}">
                                    <i class="fa fa-edit"></i>
                                    <span>Editar</span>
                                </button>
                            </td>
                        </tr>
                        @endforeach()
                    </tbody>
                </table>
            </div>
        
    </section>
</main>

<!-- Modal -->
<div class="modal fade left" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg modal-right modal-info" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Datos Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('clientes.update','id') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="id">ID</label>
                    <input type="text" name="id" id="id" class="form-control form-control-sm" disabled>
                    <input type="hidden" name="id" id="id" class="form-control form-control-sm">
                </div>
                <div class="form-group col-md-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control form-control-sm">
                </div>
                <div class="form-group col-md-3">
                    <label for="Apaterno">A. Paterno</label>
                    <input type="text" name="Apaterno" id="paterno" class="form-control form-control-sm">
                </div>
                <div class="form-group col-md-3">
                    <label for="Amaterno">A. Materno</label>
                    <input type="text" name="Amaterno" id="materno" class="form-control form-control-sm">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="profesion">Profesion</label>
                    <input type="text" name="profesion" id="profesion" class="form-control form-control-sm">
                </div>
                <div class="form-group col-md-3">
                    <label for="fn">Fecha Nac.</label>
                    <input type="date" name="fn" id="fecha" class="form-control form-control-sm">
                </div>
                <div class="form-group col-md-3">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control form-control-sm">
                </div>
                <div class="form-group col-md-3">
                    <label for="celular">Celular</label>
                    <input type="text" name="celular" id="celular" class="form-control form-control-sm" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" id="correo" class="form-control form-control-sm">
                </div>
                <div class="form-group col-md-3">
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" id="direccion" class="form-control form-control-sm">
                </div>
                <div class="form-group col-md-3">
                    <label for="cp">C.P.</label>
                    <input type="text" name="cp" id="cp" class="form-control form-control-sm">
                </div>
                <div class="form-group col-md-3">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" class="form-control form-control-sm">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="estado">Estado</label>
                    <input type="text" name="estado" id="estado" class="form-control form-control-sm">
                </div>
                <div class="form-group col-md-3">
                    <label for="pais">Pais</label>
                    <input type="text" name="pais" id="pais" class="form-control form-control-sm">
                </div>
                <div class="form-group col-md-3">
                    <label for="tcliente">Tipo Cliente</label>
                    <select name="tcliente" id="tcliente" class="form-control form-control-sm">
                        <option value="Distinguido" selected>Distinguido</option>
                        <option value="E-commerce">E-commerce</option>
                        <option value="Jr">Jr</option>
                        <option value="Otro">otro</option>
                    </select>    
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    <span>Cerrar</span>
                </button>
                <button type="submit" class="btn btn-info">
                    <i class="fa fa-save"></i>
                    <span>Guardar Cambios</span>
                </button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>