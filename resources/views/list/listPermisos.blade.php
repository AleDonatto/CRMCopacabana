@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10">
    <section class="bg-light page-section">
        <div class="container text-center">
            <h2 class="font-italic">User Roles</h2>
        </div>
        <div class="container">
            <table class="table table-striped table-hover">
                <thead>
                    <th scope="col">idPermiso</th>
                    <th scope="col">Descripcion del Permiso</th>
                    <th scope="col">Opciones</th>
                </thead>
                <tbody>
                    @foreach($Permisos as $item)
                    <tr>
                        <th scope="col">{{$item->idPermiso}}</th>
                        <td>{{$item->DescDep}}</td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">
                                <i class="fa fa-edit"></i>
                                <span>Editar</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach()
                </tbody>
            </table>
        </div>
    </section>
</main>