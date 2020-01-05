@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg-light">
    <section class="bg-light page-section">
        <div class="container">
            <h2 class="text-center font-italic card">Cotizaciones</h2>
        </div>
        <div class="container">
            <table class="table table-striped table-hover table-sm" id="dtHorizontalExample" cellspacing="0" width="100%">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Fin</th>
                    <th scope="col">Habitaciones</th>
                    <th scope="col">Opciones</th>
                </thead>
                <tbody>
                    @foreach($clientes as $item)
                        @if($item->Estado == 'Pendiente')
                        <tr style="background-color: #FBFF7A;">    
                        @elseif($item->Estado == 'Confirmado')
                        <tr style="background-color: #7DF65F;">
                        @elseif($item->Estado == 'Cancelada')
                        <tr style="background-color: #FE4141;">
                        @endif
                            <th>{{$item->idGrupo}}</th>
                            <td>{{$item->Nombre." ".$item->ApePaterno." ".$item->ApeMaterno}}</td>
                            <td>{{$item->NombreGrupo}}</td>
                            <td>{{$item->Telefono}}</td>
                            <td>{{$item->Celular}}</td>
                            <td>{{$item->Correo}}</td>
                            <td>{{$item->FechaInicio}}</td>
                            <td>{{$item->FechaFin}}</td>
                            <td>{{$item->NoHabitaciones}}</td>
                            <td>
                                @if($item->Estado == 'Pendiente')
                                <span data-toggle="tooltip" data-placement="bottom" title="Editar Cotizacion">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalEditCotizacion" data-grupo="{{$item->idGrupo}}" 
                                    data-nombregrupo="{{$item->NombreGrupo}}" data-fechainicio="{{$item->FechaInicio}}"  data-fechafin="{{$item->FechaFin}}"
                                    data-habitaciones="{{$item->NoHabitaciones}}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </span>
                                <span data-toggle="tooltip" data-placement="bottom" title="Agregar Salon">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalSalones" data-idcotizacion="{{$item->idGrupo}}">
                                        <i class="far fa-plus-square"></i>
                                    </button>
                                </span>
                                <!--<a href="" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Agregar Salon">
                                    <i class="far fa-plus-square"></i>
                                    <span></span>
                                </a>-->
                                <a href="{{ route('confirmCotizacion',$item->idGrupo) }}" data-toggle="tooltip" data-placement="bottom" class="btn btn-success" title="Confirmar">
                                    <i class="fa fa-check"></i>
                                    <span></span>
                                </a>
                                <a href="{{ route('cancelCotizacion',$item->idGrupo) }}" data-toggle="tooltip" data-placement="bottom" class="btn btn-danger" title="Cancelar">
                                    <i class="fa fa-times"></i>
                                    <span></span>
                                </a>
                                @endif
                                @if($item->Tipo == 'Grupo')
                                <a href="{{ route('cotizacionGrupos',$item->idCliente) }}" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Ver Cotizacion" target="_blank">
                                    <i class="fas fa-print"></i>
                                    <span></span>
                                </a>
                                @else
                                <a href="{{ route('cotizacionIndividual',$item->idCliente) }}" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Ver Cotizacion" target="_blank">
                                    <i class="fas fa-print"></i>
                                    <span></span>
                                </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach()    
                </tbody>
            </table>
        </div>
    </section>
</main>

<!-- modal Evento -->
<div class="modal fade left" id="modalSalones" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-lg modal-right modal-info" role="documnet">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Agregar Salon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('eventos.store') }}" method="post">
                    @csrf 
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="idcotizacion">Numero de Cotizacion</label>
                            <input type="text" name="id" id="idcotizacion" class="form-control" disabled>
                            <input type="hidden" name="idcotizacion" id="idcotizacion">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="fInicio">Dia de Ocupacion: </label>
                            <input type="date" name="fInicio" id="" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="hora">Hora de Inicio: </label>
                            <input type="time" name="hora" id="" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="horafin">Hora de Terminacion: </label>
                            <input type="time" name="horafin" id="" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Ssalon">Seleccionar salon: </label>
                            <select name="Ssalon" id="" class="form-control">
                                <option value="S1">Bar Agave</option>
                                <option value="S2">Salon del Mar</option>
                                <option value="S3">Salon la Perla</option>
                                <option value="S4">Montecarlo</option>
                                <option value="S5">Luxos</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                            <span>Cerrar</span>
                        </button>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-save"></i>
                            <span>Agregar Salon</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- editar cotizacion -->
<div class="modal fade left" id="ModalEditCotizacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-lg modal-right modal-info" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Cotizacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('cotizacion.update',$item->idGrupo) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="idgrupo">Id Cotizacion</label>
                            <input type="text" name="grupo" id="grupo" class="form-control form-control-sm" disabled>
                            <!--<input type="hidden" name="idGrupo" id="idGrupo" class="form-control form-control-sm">-->
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nombregrupo">Nombre</label>
                            <input type="text" name="nombregrupo" id="nombregrupo" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fechainicio">Fecha Inicio</label>
                            <input type="date" name="fechainicio" id="fechainicio" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fechafin">Fecha Fin</label>
                            <input type="date" name="fechafin" id="fechafin" class="form-control form-control-sm">
                        </div>  
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="habitaciones">No. Habitaciones</label>
                            <input type="text" name="habitaciones" id="habitaciones" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
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
