@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg-light">
    <section class="bg-light page-section">
        <div class="container">
            <div class="row col-lg-12">
                <h2 class="font-italic">Cotizaciones</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('newCotizacion') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="nombreCliente">Nombre Cliente: </label>
                                <input type="text" name="nombreCliente" class="form-control" placeholder="Nombre" 
                                value="{{ $clientes->Nombre }}">
                                <input type="hidden" name="idCliente" value="{{ $clientes->idCliente }}">
                            </div>
                            <div class="form-group col-md-3">
                            
                                @php 
                                $apellidos = $clientes->ApePaterno." ".$clientes->ApeMaterno;
                                @endphp

                                <label for="apeliidos">Apellidos: </label>
                                <input type="text" name="apellidos" id="" class="form-control" placeholder="Apellidos"
                                value="{{ $apellidos }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="telefono">Telefono: </label>
                                <input type="text" name="telefono" id="" class="form-control" placeholder="Telefono"
                                value="{{ $clientes->Telefono }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="correo">Correo: </label>
                                <input type="text" name="correo" id="" class="form-control" placeholder="Correo" 
                                value="{{ $clientes->Correo }}">
                            </div>
                        </div>              
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="grupo">Nombre Grupo:</label>
                                <input type="text" name="grupo" id="" class="form-control @error('grupo') is-invalid @enderror" placeholder="Nombre del grupo">

                                @error('grupo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fechaInicio">Fecha: </label>
                                <input type="date" name="fechaInicio" id="" class="form-control" value="{{ date('Y-m-d') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fechaFin">Fecha Final: </label>
                                <input type="date" name="fechaFin" id="" class="form-control @error('fechaFin') is-invalid @enderror">

                                @error('fechaFin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="nHabitacion">Numero de Habitaciones/Personas</label>
                                <input type="text" name="nHabitaciones" id="" class="form-control @error('nHabitaciones') is-invalid @enderror" placeholder="Habitaciones/Personas">

                                @error('nHabitaciones')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Crear Cotizacion</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    function divSalon(checkbox){
        var form = document.getElementById("salones")

        if(checkbox.checked){
            form.style.display=""
        }

        if(checkbox.checked == false){
            form.style.display="none"
        }
    }
</script>