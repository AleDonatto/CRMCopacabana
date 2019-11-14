@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg-light">
  <section class="bg-light page-section">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="font-italic">Alta Usuarios</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="{{ route('usuarios.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="nombreuser">Nombre</label>
                <input type="text" name="nombreuser" id="nombreuser" class="form-control @error('nombreuser') is-invalid @enderror" placeholder="Nombre"
                value="{{ old('nombreuser') }}" >

                @error('nombreuser')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control @error('apellidos') is-invalid @enderror" placeholder="Apellidos"
                value="{{ old('apellidos') }}" >

                @error('apellidos')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="nick">Nick</label>
                <input type="text" name="nick" id="nick" onFocus="RecomendarCheck()" class="form-control @error('nick') is-invalid @enderror" placeholder="Nick"
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
                  <input type="checkbox" name="pRecepcion" class="form-check-input" id="recepcion" value="yes">
                  <label for="pRecepcion" class="form-check-label">Recepcion</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="checkbox" name="pVentas" class="form-check-input" id="grupos" value="yes">
                  <label for="pVentas" class="form-check-label">Ventas y Grupos</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="checkbox" name="pClientesDis" id="distinguido" class="form-check-input" value="yes">
                  <label for="pClientesDis" class="form-check-label">Clientes Distinguidos</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="checkbox" name="pAdmin" id="admin" class="form-check-input" value="yes" onclick="Admin(this)">
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

<script >
  function RecomendarCheck(){
    var text1 = document.getElementById('nombreuser').value
    var text2 = document.getElementById('apellidos').value

    //var nombre = text1.replace(/[A-Za-z]+/g, function(match){ return (match.trim()[0]);});

    var nombre = text1.split(" "), total = nombre.length, resul="";
    var apellidos = text2.split(" "), total2 = apellidos.length, resul1="";

    for(var i=0; i<total; resul += nombre[i][0], i++);

    for(var i=0; i<total2; resul1 += apellidos[i][0], i++);

    document.getElementById('nick').value = resul+resul1;

  }



  function Admin(checkbox){
  if(checkbox.checked){
    document.getElementById("distinguido").checked=false;
    document.getElementById("grupos").checked=false;
    document.getElementById("recepcion").checked=false;

    document.getElementById("recepcion").disabled=true;
    document.getElementById("grupos").disabled=true;
    document.getElementById("distinguido").disabled=true;
  }

  if(checkbox.checked==false){

    document.getElementById("recepcion").disabled=false;
    document.getElementById("grupos").disabled=false;
    document.getElementById("distinguido").disabled=false;
  }
}
</script>