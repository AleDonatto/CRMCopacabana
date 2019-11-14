@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg-light">
    <section class="bg-light page-section">
        <div class="container">
            <h2 class="text-center font-italic card">Lista Clientes</h2>
            <div class="container">
                <div class="car-body">
                    <div class="row">
                    </div>
                </div>
            </div>
            <div class="container">
                <table class="table table-striped table-hover table-sm" id="dtHorizontalExample" cellspacing="0" width="100%">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Opciones</th>
                    </thead>
                    <tbody>
                    @php
                        $int = 1;
                    @endphp
                    @foreach($clientes as $item)
                        <tr>
                            <th scope="col">{{$int}}</th>
                            <td>{{$item->Nombre." ".$item->ApePaterno." ".$item->ApeMaterno}}</td>
                            <td>{{$item->Telefono}}</td>
                            <td>{{$item->Celular}}</td>
                            <td>{{$item->Correo}}</td>
                            <td>
                                @if(session('pGrupos')=="yes" || session('pAdmin')=="yes")
                                    <a href="{{ route('cotizacion.show',$item->idCliente) }}" class="btn btn-info btn-sm">
                                        <i class="fa fa-file-invoice"></i>
                                        <span>Cotizar</span>
                                    </a>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal">
                                        <i class="fa fa-edit"></i>
                                        <span>Otro</span>
                                    </button>
                                @endif
                                
                            </td>
                        </tr>
                        @php
                            $int = $int + 1;
                        @endphp
                        
                    @endforeach()
                </tbody>
            </table>
        </div>
    </section>
</main>
