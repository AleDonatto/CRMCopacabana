@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg-light">
    <section class="bg-light page-section">
        <div class="container">
            <div class="row col-md-12">
                <h2 class="font-italic">Agregar Salon a Grupo</h2>
            </div>
        </div>
        <div class="container">
            <form action="" method="post">
                @csrf
                @method('PUT')
                <div class="form-row" id="salones">
                    <div class="form-group col-md-3">
                        <label for="fInicio">Fecha: </label>
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
            </form>
        </div>
    </section>
</main>