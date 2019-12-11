@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg-light">
  <!-- formulario clientes-->
  <section class="bg-light page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="font-italic">Registro de Clientes</h2>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form action="{{ route('clientes.store') }}" method="POST" class="Formulario">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputNombre">Nombre:</label>
                <input type="text" name="inputNombre" id="" placeholder="Nombre/s" class="form-control @error('inputNombre') is-invalid @enderror" value="{{ old('inputNombre') }}">

                @error('inputNombre')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group col-md-3">
                <label for="inputAP">Apellido Paterno:</label>
                <input type="text" name="inputAP" id="" placeholder="Apellido Paterno" class="form-control @error('inputAP') is-invalid @enderror" value="{{ old('inputAP') }}">

                @error('inputAP')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group col-md-3">
                <label for="inputAM">Apellido Materno:</label>
                <input type="text" name="inputAM" placeholder="Apellido Materno" class="form-control @error('inputAM') is-invalid @enderror" value="{{ old('inputAM') }}">

                @error('inputAM')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group col-md-3">
                <label for="inputProfesion">Profesion:</label>
                <input type="text" name="inputProfesion" id="" placeholder="Profesion" class="form-control @error('inputProfesion') is-invalid @enderror" value="{{ old('inputProfesion') }}">

                @error('inputProfesion')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputFN">Fecha de Nacimiento: </label>
                <input type="date" name="inputFN" class="form-control @error('inputFN') is-invalid @enderror" value="{{ old('inputFN') }}">

                @error('inputFN')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group col-md-3">
                <label for="inputTelefono">Telefono:</label>
                <input type="text" name="inputTelefono" id="" placeholder="Telefono" class="form-control @error('inputTelefono') is-invalid @enderror" value="{{ old('inputTelefono') }}">

                @error('inputTelefono')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group col-md-3">
                <label for="inputCelular">Celular: </label>
                <input type="text" name="inputCelular" id="" class="form-control @error('inputCelular') is-invalid @enderror" placeholder="Celular" value="{{ old('inputCelular') }}">

                @error('inputCelular')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group col-md-3">
                <label for="inputEmail">Email:</label>
                <input type="text" name="inputEmail" id="" class="form-control @error('inputEmail') is-invalid @enderror" placeholder="Email" value="{{ old('inputEmail') }}">

                @error('inputEmail')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputDomicilio">Domicilio</label>
                <input type="text" name="inputDomicilio" id="" class="form-control @error('inputDomicilio') is-invalid @enderror" placeholder="Domicilio" value="{{ old('inputDomicilio') }}">

                @error('inputDomicilio')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group col-md-3">
                <label for="inputCP">Codigo Postal: </label>
                <input type="text" name="inputCP" id="" class="form-control @error('inputCP') is-invalid @enderror" placeholder="Codigo Postal" value="{{ old('inputCP') }}">

                @error('inputCP')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group col-md-3">
                <label for="inputCiudad">Ciudad: </label>
                <input type="text" name="inputCiudad" id="" class="form-control @error('inputCiudad') is-invalid @enderror" placeholder="Ciudad" value="{{ old('inputCiudad') }}">

                @error('inputCiudad')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group col-md-3">
                <label for="inputEstado">Estado: </label>
                <input type="text" name="inputEstado" id="" class="form-control @error('inputEstado') is-invalid @enderror" placeholder="Estado" value="{{ old('inputEstado') }}">

                @error('inputEstado')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputPais">Pais: </label>
                <input type="text" name="inputPais" id="" class="form-control @error('inputPais') is-invalid @enderror" placeholder="Pais" value="{{ old('inputPais') }}">

                @error('inputPais')
                  <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group col-md-3">
                <label for="inputTC">Tipo de Cliente: </label>
                <select name="inputTC" id="" class="form-control @error('inputTC') is-invalid @enderror" value="{{ old('inputTC') }}">
                  <option value="Distinguido">Distinguido</option>
                  <option value="E-marketing">E-marketing</option>
                  <option value="Jr">Jr.</option>
                  <option value="otro">Otro</option>
                </select>

                @error('inputTC')
                  <span class="invallid-feedback">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <!--<hr>
            <div class="form-row">
              <h2 class="font-italic">Habitaciones</h2>
              <br>
            </div>

            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="habitacion">Numero de habitacion</label>
                <input type="text" name="habitacion" id="" class="form-control @error('habitacion') is-invalid @enderror"
                placeholder="Numero de Habitacion" value="{{ old('habitacion') }}">

                @error('habitacion')
                  <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-3">
                <label for="fInicio">Fecha Inicio</label>
                <input type="date" name="fInicio" id="" class="form-control">
              </div>
              <div class="form-group col-md-3">
                <label for="fFin">Fecha Fin</label>
                <input type="date" name="fFin" id="fFin" class="form-control">
              </div>
              <div class="form-group col-md-3">
                <label for="input">Input</label>
                <input type="text" class="form-control" name="input" placeholder="input">
              </div>
            </div>-->
            
            <button type="submit" class="btn btn-success">
              <i class="fa fa-check-circle"></i>
              <span>Registrar Cliente</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- modal agregar habitacion -->
<div class="modal fade left" id="exampleModalUserquestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Habitaciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <h5>¿Desea agregar habitacion al cliente?</h5>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger" data-dismiss="modal">
                <i class="fa fa-times"></i>
                <span>No gracias</span>
              </button>
              <button type="submit" class="btn btn-info">
                <i class="fa fa-check"></i>
                <span>Simon</span>
              </button>
            </div>
        </div>
    </div>
</div>