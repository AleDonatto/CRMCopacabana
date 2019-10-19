@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10">
  <section class="bg-light page-section">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="font-italic">Alta Usuarios</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="{{ route('user.insertUser') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="nombreuser">Nombre</label>
                <input type="text" name="nombreuser" class="form-control @error('nombreuser') is-invalid @enderror" placeholder="Nombre"
                value="{{ old('nombreuser') }}" >

                @error('nombreuser')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" placeholder="Apellidos"
                value="{{ old('apellidos') }}" >

                @error('apellidos')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="nick">Nick</label>
                <input type="text" name="nick" class="form-control @error('nick') is-invalid @enderror" placeholder="Nick"
                value="{{ old('nick') }}" >

                @error('nick')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="clave">Password</label>
                <input type="password" name="clave" class="form-control @error('clave') is-invalid @enderror" id="" placeholder="Password" 
                value="{{ old('clave') }}" >

                @error('clave')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="permiso">Permisos de Usuarios: </label>
                <div class="row">
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="permiso" class="form-check-input" value="1">
                  <label for="pRecepcion" class="form-check-label">Recepcion</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="permiso" id="" class="form-check-input" value="2">
                  <label for="pVentas" class="form-check-label">Ventas</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="permiso" class="form-check-input" value="3">
                  <label for="pAdmin" class="form-check-label">Administrador</label>
                </div>
              </div>
              <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i>
                <span>Crear Usuario</span>
              </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
