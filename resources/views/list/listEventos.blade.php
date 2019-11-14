@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg-light">
    <section class="page-section bg-light">
        <div class="container">
            <h2 class="text-center card font-italic">Eventos</h2>
        </div>
        <div class="container">
            <table class="table table-striped table-hover table-sm" id="dtHorizontalExample" cellspacing="0" width="100%">
                <thead>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Grupo</th>
                    <th scope="col" class="text-center">N. Cotizacion</th>
                    <th scope="col" class="text-center">Fecha</th>
                    <th scope="col" class="text-center">Hora Inicio</th>
                    <th scope="col" class="text-center">Hora Fin</th>
                    <th scope="col" class="text-center">Salon</th>
                    <th scope="col" class="text-center">Opciones</th>
                </thead>
                <tbody>
                    @php
                        $number = 1;
                    @endphp
                    @foreach($eventos as $item)
                        <tr>
                            <th>{{$number}}</th>
                            <td class="text-center">{{$item->NombreGrupo}}</td>
                            <td class="text-center">{{$item->Grupo_id}}</td>
                            <td class="text-center">{{$item->FechaInicio}}</td>
                            <td class="text-center">{{$item->HoraInicio}}</td>
                            <td class="text-center">{{$item->HoraFin}}</td>
                            <td class="text-center">{{$item->NombreSalon}}</td>
                            <td>
                                <!--<span data-toggle="tooltip" data-placement="bottom" title="Editar Cotizacion">-->
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalEditSalones"
                                    data-grupo = "{{$item->NombreGrupo}}" data-id="{{$item->Grupo_id}}" data-fecha="{{$item->FechaInicio}}"
                                    data-horainicio="{{$item->HoraInicio}}" data-horafin="{{$item->HoraFin}}" data-salon="{{$item->NombreSalon}}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                <!--</span>-->
                            </td>
                        </tr>
                        @php
                            $number = $number +1;
                        @endphp    
                    @endforeach()
                </tbody>
            </table>
        </div>
    </section>
</main>

<div class="modal fade left" id="modalEditSalones" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-lg modal-right modal-info" role="documnet">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Editar Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('eventos.update','id') }}" method="post">
                    @csrf 
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="idcotizacion">Numero de Cotizacion</label>
                            <input type="text" name="id" id="idcotizacion" class="form-control" disabled>
                            <input type="hidden" name="idcotizacion" id="idcotizacion">
                        </div>
                        <div class="col-md-3">
                            <label for="nombregrupo">Nombre Grupo</label>
                            <input type="text" id="nombregrupo" name="nombregrupo" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="fInicio">Dia de Ocupacion: </label>
                            <input type="date" name="fInicio" id="fecha" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="hora">Hora de Inicio: </label>
                            <input type="time" name="hora" id="hora" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="horafin">Hora de Terminacion: </label>
                            <input type="time" name="horafin" id="horafin" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Ssalon">Seleccionar salon: </label>
                            <select name="Ssalon" id="salones" class="form-control">
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
                            <span>Guardar Cambios</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


