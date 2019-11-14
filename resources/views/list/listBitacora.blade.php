@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg-light">
    <section class="bg-light page-section">
        <div class="container">
            <h2 class="text-center card font-italic">Bitacora</h2>
        </div>
        <div class="container">
            <table class="table table-striped table-hover table-sm" id="dtHorizontalExample" cellspacing="0" width="100%">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Host</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Accion Realizada</th>
                    <th scope="col">Tabla de BD</th>
                    <th scope="col">Datos</th>
                </thead>
                <tbody>
                    @foreach($bitacora as $item)
                        <tr>
                            <th scope="col">{{$item->idBitacora}}</th>
                            <td>{{$item->Usuario}}</td>
                            <td>{{$item->Host}}</td>
                            <td>{{$item->Fecha}}</td>
                            <td>{{$item->Accion}}</td>
                            <td>{{$item->Tabla}}</td>
                            <td>{{$item->Datos}}</td>
                        </tr>
                    @endforeach()
                </tbody>
            </table>
        </div>
    </section>
</main>