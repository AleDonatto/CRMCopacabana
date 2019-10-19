@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10">
  <!-- formulario clientes-->
  <section class="bg-light page-section">
    <div class="container">
        <div class="container card">
            <h2 class="text-center font-italic">Lista Usuarios</h2>
            <!--<div class="container">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 form-inline">
                            <a href="" class="btn btn-light btn-sm mx-sm-2">
                                <i class="fa fa-search"></i>
                                <span>buscar</span>
                            </a>
                            <form action="" class="form-inline" metod="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="buscar">Buscar: </label>
                                    <input type="text" name="buscar" id="" class="form-control mx-sm-2 @error('buscar') is-invalid @enderror">
                                    
                                    @error('buscar')
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-light btn-sm mx-sm-2">
                                    <i class="fa fa-search"></i>
                                    <span>Buscar</span>     
                                </button>
                            </form>
                        </div>
                        <div class="col-md-6 form-inline">
                            <a href="{{ route('listUser') }}" class="btn btn btn-light btn-sm mx-sm-2">
                                <i class="fa fa-list-ol"></i>
                                <span>Consultar Todos</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
        <div class="container">
            <table class="table table-striped table-hover table-sm" id="dtHorizontalExample" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th scope="col">idUser</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Nick</th>
                    <th scope="col">Permisos</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Usuarios as $item)
                <tr>
                    <th scope="row">{{ $item->idUser }}</th>
                    <td>{{ $item->Nombre }}</td>
                    <td>{{ $item->Apellidos}}</td>
                    <td>{{ $item->Nick }}</td>
                    <td>{{ $item->idPermiso }}</td>
                    <td>
                        <a href="" class="btn btn-info btn-sm">
                            <i class="fa fa-edit"></i>
                            <span>Editar</span>
                        </a>
                        <a href="" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash-alt"></i>
                            <span>Eliminar</span>
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
