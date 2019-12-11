@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg-light">
  <!-- formulario clientes-->
    <section class="bg-light page-section">
        <div class="container">
            <div class="container card">
                <h2 class="text-center font-italic">{{ __('Lista Usuarios')}}</h2>
            </div>
            <div class="container">
                <table class="table table-striped table-bordered table-hover table-sm" id="dtHorizontalExample" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                        <th scope="col">{{ __('id user') }}</th>
                        <th scope="col">{{ __('Nombre') }}</th>
                        <th scope="col">{{ __('Apellidos') }}</th>
                        <th scope="col">{{ __('Nick') }}</th>
                        <th scope="col">{{ __('P.GV') }}</th>
                        <th scope="col">{{ __('P.R') }}</th>
                        <th scope="col">{{ __('P.CD') }}</th>
                        <th scope="col">{{ __('P.Admin') }}</th>
                        <th scope="col">{{ __('Opciones') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($Users as $item)
                    <tr>
                        <th scope="row">{{ $item->idUsuarios }}</th>
                        <td>{{ $item->Nombre }}</td>
                        <td>{{ $item->Apellidos}}</td>
                        <td>{{ $item->Nick }}</td>
                        <td class="text-center">{{ $item->pGrupos }}</td>
                        <td class="text-center">{{ $item->pRecepcion }}</td>
                        <td class="text-center">{{ $item->pClientDis }}</td>
                        <td class="text-center">{{ $item->pAdmin }}</td>
                        <td>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModalUser"
                            data-id="{{$item->idUsuarios}}" data-nombre="{{$item->Nombre}}" data-apellidos="{{$item->Apellidos}}"
                            data-nick="{{$item->Nick}}" data-pgrupos="{{$item->pGrupos}}" data-precepcion="{{$item->pRecepcion}}"
                            data-pclientes="{{$item->pClientDis}}" data-padmin="{{$item->pAdmin}}">
                                <i class="fa fa-edit"></i>
                                <span>Editar</span>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalUserdelete"
                            data-id="{{$item->idUsuarios}}">
                                <i class="fa fa-trash-alt"></i>
                                <span>Eliminar</span>
                            </button>
                            <a href="{{ route('usuarios.show',$item->idUsuarios) }}" type="button" class="btn btn-warning btn-sm">
                                <i class="fa fa-user-lock"></i>
                                <span>Password</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach()
                    </tbody>
                </table>
            </div>
        </div>
  </section>
</main>

<!-- modalUserEdit -->
<div class="modal fade left" id="exampleModalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-lg modal-right modal-info" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Datos Usuarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('usuarios.update','id') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="id">ID</label>
                            <input type="text" name="id" id="id" class="form-control form-control-sm" disabled>
                            <input type="hidden" name="id" id="id" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nick">Nick</label>
                            <input type="text" name="nick" id="nick" class="form-control form-control-sm">
                        </div>
                        <!--<div class="form-group col-md-8">
                            <label for="">Permisos</label>
                            <div class="form-row">
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="recepcion" id="permisoR" class="form-check-input">
                                <label for="recepcion" class="form-check-label">Recepcion</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="ventas" id="permisoVG" class="form-check-input">
                                <label for="ventas" class="form-check-label">Ventas y Grupos</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="clientes" id="permisoCD" class="form-check-input">
                                <label for="clientes" class="form-check-label">Clientes Distinguidos</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="admin" id="permisoA" class="form-check-input">
                                <label for="admin" class="form-check-label">Administrador</label>
                            </div>
                        </div>-->
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

<!-- modal delete -->
<div class="modal fade left" id="exampleModalUserdelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('Eliminar Datos Usuarios') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>{{ __('¿Esta seguro que desea eliminar el usuario, no se revertiran cambios?') }}</h5>
                <form action="{{ route('usuarios.destroy','id') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" id="id">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                            <span>Cerrar</span>
                        </button>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-check"></i>
                            <span>Eliminar</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>