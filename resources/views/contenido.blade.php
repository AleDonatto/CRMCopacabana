@extends('index')

@section('admin')
<nav class="collapse navbar-collapse col-md-2 d-nono d-md-block bg-light sidebar" id="navbarResponsive">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#formClientes" class="nav-link btn btn-outline-success opciones text-left">
                    <i class="fa fa-address-book"></i>
                    <span>Clientes y Habitacion</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#listUser" class="nav-link btn btn-outline-success opciones text-left">
                    <i class="fa fa-address-book"></i>
                    <span>Consulta Clientes</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link btn btn-outline-success opciones text-left">
                    <i class="fa fa-chart-bar"></i>
                    <span>Evaluacion del cliente</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link btn btn-outline-success opciones text-left">
                    <i class="fa fa-address-book"></i>
                    <span>Grupos</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#createUser" class="nav-link btn btn-outline-success opciones text-left">
                    <i class="fa fa-user-plus"></i>
                    <span>Crear Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link btn btn-outline-success opciones text-left">
                    <i class="fa fa-users-cog"></i>
                    <span>Configuracion Usuarios</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <!-- formulario de registro -->
    <section class="bg-light page-section" id="createUser">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center">
                    <h2 class="text-uppercase">Cracion de Usuarios</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre/s</label>
                            <input type="text" name="nombre" id="" class="form-control" placeholder="Nombre/s">
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                            <label for="nick">Nick</label>
                            <input type="text" name="nick" class="form-control" placeholder="Nick">
                        </div>
                        <div class="form-group">
                            <label for="clave">Password</label>
                            <input type="password" name="calve" class="form-control" id="" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="">Permisos de Usuarios: </label>
                            <div class="row">
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pRecepcion" class="form-check-input" value="1">
                                <label for="pRecepcion" class="form-check-label">Recepcion</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pVentas" id="" class="form-check-input" value="2">
                                <label for="pVentas" class="form-check-label">Ventas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pAdmin" class="form-check-input" value="3">
                                <label for="pAdmin" class="form-check-label">Administrador</label>
                            </div>
                        </div><button type="submit" class="btn btn-primary">Crear Usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- lista de clinetes --> 
    <section class="page-section" id="listUser">
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">idUser</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Nick</th>
                        <th scope="col">Permisos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td>Alejandro</td>
                        <td>Jaimes Donatto</td>
                        <td>AJD</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- formulario clientes-->
    
</main>            
@endsection

@section('recepcion')
<nav class="collapse navbar-collapse col-ms-2 d-nono d-md-block bg-light sidebar" id="navbarResponsive">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link text-center btn btn-outline-success">
                    <i class="fa fa-user-plus"></i>
                    <span>Agregar Cliente</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-center btn btn-outline-success">
                    <i class="fa fa-list-alt"></i>
                    <span>Consultar Clientes</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-center btn btn-outline-success">
                    <i class="fa fa-trophy"></i>
                    <span>Recompensas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-center btn btn-outline-success">
                    <i class="fa fa-star"></i>
                    <span>Another accion</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
</main>

@endsection

@section('ventas')
<nav class="collapse navbar-collapse col-md-2 d-nono d-md-block bg-light sidebar" id="navbarResposnsive">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link text-center btn btn-outline-succes">
                    <i class="fa fa-bootstrap"></i>
                    <span>Another accion</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
</main>
@endsection

@section('example')
<div class="container" id="formClientes">
 se llamo formulario
</div>
@endsection