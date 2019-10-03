@extends('index')

@section('Admin')

<div class="row">
    <button class="nabvar-toggler navbra-toggler-right" type="button" data-toggler="collapase"
    data-traget="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <nav class="collapse navbar-collpase col-md-2 d-nono d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#formClientes" class="nav-link active text-center">
                        <i class="fa fa-address-book"></i>
                        <span>Clientes y Habitacion</span>
                    </a>

                </li>                                                  

                <li class="nav-item">
                    <a href="" class="nav-link text-center">
                        <i class="fa fa-address-book"></i>
                        <span>Consulta Clientes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-center">
                        <i class="fa fa-address-book"></i>
                        <span></span>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-center">
                        <i class="fa fa-address-book"></i>
                        <span>Grupos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-center">
                        <i class="fa fa-address-book"></i>
                        <span>Crear Usuarios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-center">
                    <i class="fa fa-address-book"></i>
                    <span>Configuracion Usuarios</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="formClientes" class="col-md-10 ml-sm-auto col-lg-10 px-4" >
        @yield('form.formClientes');
    </section>
</div>


<div class="container">
    <a href="{{ route('index') }}" class="btn btn-primary">Ir a inicio</a>
</div>

@endSection