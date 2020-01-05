@extends('index')

@section('admin')
<ul class="nav flex-column">
    <li class="nav-item">
        <button class="nav-link btn btn-outline-success text-left" type="button" data-toggle="collapse"
        data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
            <i class="fa fa-home"></i>
            <span>{{ __('Home') }}</span>
        </button>

        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        <p><a href="{{ route('dashboard') }}" class="text-success">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>{{ __('Dashboard') }}</span>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <button class="nav-link btn btn-outline-success text-left" type="button" data-toggle="collapse"
        data-target="#clientes" aria-expanded="false" aria-control="clientes">
            <i class="fa fa-address-book"></i>
            <span>Clientes</span>
        </button>

        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="clientes">
                    <div class="card card-body">
                        <p><a href="{{ route('clientes.create') }}" class="text-success">
                            <i class="fa fa-user-plus"></i>
                            <span>Agregar Cliente</span>
                        </a></p>
                        <p><a href="{{ route('clientes.index') }}" class="text-success">
                            <i class="fa fa-list-alt"></i>
                            <span>Consulta de Clientes</span>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <button class="nav-link btn btn-outline-success text-left" type="button" data-toggle="collapse"
        data-target="#recompensas" aria-expanded="false" aria-control="recompensas">
            <i class="fa fa-trophy"></i>
            <span>Recompensas</span>
        </button>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="recompensas">
                    <div class="card card-body">
                        <p><a href="" class="text-success">
                            <i class="fa fa-trophy"></i>
                            <span>Consulta de Recompensas</span>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <button class="nav-link btn btn-outline-success text-left" type="button" data-toggle="collapse"
        data-target="#cotizacion" aria-expanded="false" aria-control="cotizacion">
            <i class="fa fa-file-invoice-dollar"></i>
            <span>Cotizaciones</span>
        </button>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="cotizacion">
                    <div class="card card-body">
                        <p><a href="{{ route('clientessmall') }}" class="text-success">
                            <i class="fa fa-file-invoice-dollar"></i>
                            <span>Nueva Cotizacion</span>
                        </a></p>
                        <p><a href="{{ route('cotizacion.index') }}" class="text-success">
                            <i class="fa fa-list-ol"></i>
                            <span>Consulta de Cotizaciones</span>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <button class="nav-link btn btn-outline-success text-left" type="button" data-toggle="collapse"
        data-target="#salones" aria-expanded="false" aria-control="salones">
            <i class="fa fa-building"></i>
            <span>Salones</span>
        </button>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="salones">
                    <div class="card card-body">
                        <p><a href="{{ route('chart.index') }}" class="text-success">
                            <i class="far fa-chart-bar"></i>
                            <span>Consulta de Eventos</span>
                        </a></p>
                        <p><a href="{{ route('eventos.index') }}" class="text-success">
                            <i class="fas fa-tools"></i>
                            <span>Configuracion de Eventos</span>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <button class="nav-link btn btn-outline-success text-left" type="button" data-toggle="collapse"
        data-target="#usuarios" aria-expanded="false" aria-control="usuarios">
            <i class="fa fa-user-plus"></i>
            <span>Usuarios</span>
        </button>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="usuarios">
                    <div class="card card-body">
                        <p><a href="{{ route('usuarios.create') }}" class="text-success">
                            <i class="fa fa-user-plus"></i>
                            <span>Crear Usuarios</span>
                        </a></p>
                        <p><a href="{{ route('usuarios.index') }}" class="text-success">
                            <i class="fa fa-user-cog"></i>
                            <span>Configuracion de Usuarios</span>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <button class="nav-link btn btn-outline-success text-left" type="button" data-toggle="collapse"
        data-target="#encuesta" aria-expanded="false" aria-control="encuesta">
            <i class="fa fa-poll"></i>
            <span>Encuesta de Servicio</span>
        </button>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="encuesta">
                    <div class="card card-body">
                        <p><a href="" class="text-success">
                            <i class="fa fa-chart-bar"></i>
                            <span>Grafica de Resultados</span>
                        </a></p>
                        <p><a href="" class="text-success">
                            <i class="fa fa-list-alt"></i>
                            <span>Lista de Preguntas</span>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="{{ route('bitacora') }}" class="nav-link btn btn-outline-success btn-sm text-left">
            <i class="fa fa-book"></i>
            <span>Bitacora</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('salir') }}" class="nav-link btn btn-outline-success btn-sm text-left">
            <i class="fa fa-sign-out-alt"></i>
            <span>Cerrar Session</span>
        </a>
    </li>
</ul>
@endsection

@section('distinguido')
<ul class="nav flex-columnd">
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="dropdownHome"
            data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                <i class="fa fa-home"></i>
                <span>{{ __('Home') }}</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownHome">
                <a href="{{ route('dashboard') }}" class="dropdown-item">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="{{ route('clientes.create') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-address-book"></i>
            <span>Agregar Clientes</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('clientes.index') }}" class="nev-link btn btn-outline-success text-left">
            <i class="fa fa-address-book"></i>
            <span>Consulta Clientes</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-trophy"></i>
            <span>Recompensas</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-star"></i>
            <span>Another Action</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('salir') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-sign-out-alt"></i>
            <span>Cerrar Session</span>
        </a>
    </li>
</ul>
@endsection

@section('recepcion')
<ul class="nav flex-column">
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="dropdownHome"
            data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                <i class="fa fa-home"></i>
                <span>{{ __('Home') }}</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownHome">
                <a href="{{ route('dashboard') }}" class="dropdown-item">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="{{ route('clientes.index') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-list-alt"></i>
            <span>Consulta de Clientes</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-trophy"></i>
            <span>Recompensas</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-star"></i>
            <span>Another Action</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('salir') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-sign-out-alt"></i>
            <span>Cerrar Session</span>
        </a>
    </li>
</ul>
@endsection

@section('ventas')
<ul class="nav flex-column">
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="dropdownHome"
            data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                <i class="fa fa-home"></i>
                <span>{{ __('Home') }}</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownHome">
                <a href="{{ route('dashboard') }}" class="dropdown-item">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="{{ route('clientes.create') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-user-plus"></i>
            <span>Agregra Cliente</span>
        </a>
        <!--<div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" tupe="button" 
            id="dropdownMenu1" data-toggle="dropdown" aria-hospopup="treu" aria-expanded="false">
                <i class="fa fa-user-plus"></i>
                <span>Clientes</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <a href="{{ route('clientes.create') }}" class="dropdown-item">
                    <i class="fa fa-user-plus"></i>
                    <span>Agregar Cliente</span>
                </a>
                <a href="{{ route('clientessmall') }}" class="dropdown-item">
                    <i class="fa fa-list-alt"></i>
                    <span>Conuslta de Clientes</span>
                </a>
            </div>
        </div>-->
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-file-invoice-dollar"></i>
                <span>Cotizaciones</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a href="{{ route('clientessmall') }}" class="dropdown-item">
                    <i class="fa fa-file-invoice-dollar"></i>
                    <span>Nueva Cotizacion</span>
                </a>
                <a href="{{ route('cotizacion.index') }}" class="dropdown-item">
                    <i class="fa fa-list-ol"></i>
                    <span>Consultar Cotizaciones</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="salones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-building"></i>
                <span>Salones</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="salones">
                <a href="{{ route('chart.index')  }}" class="dropdown-item">Consulta de Eventos</a>
                <a href="{{ route('eventos.index') }}" class="dropdown-item">Configuracion Eventos</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="{{ route('salir') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-sign-out-alt"></i>
            <span>Cerrar Session</span>
        </a>
    </li>
</ul>
@endsection

@section('disti-recep')
<ul class="nav flex-columnd">
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="dropdownHome"
            data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                <i class="fa fa-home"></i>
                <span>{{ __('Home') }}</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownHome">
                <a href="{{ route('dashboard') }}" class="dropdown-item">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="{{ route('clientes.create') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-address-book"></i>
            <span>Agregar Clientes</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('clientes.index') }}" class="nev-link btn btn-outline-success text-left">
            <i class="fa fa-address-book"></i>
            <span>Consulta Clientes</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link btn btn-outline-success text-left"></a>
        <i class="fa fa-trophy"></i>
        <span>Recompensas</span>
    </li>
    <li class="nav-item">
        <a href="{{ route('salir') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-sign-out-alt"></i>
            <span>Cerrar Session</span>
        </a>
    </li>
</ul>
@endsection

@section('dist-ventas')
<ul class="nav flex-columnd">
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="dropdownHome"
            data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                <i class="fa fa-home"></i>
                <span>{{ __('Home') }}</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownHome">
                <a href="{{ route('dashboard') }}" class="dropdown-item">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="{{ route('clientes.create') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-address-book"></i>
            <span>Agregar Clientes</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('clientes.index') }}" class="nev-link btn btn-outline-success text-left">
            <i class="fa fa-address-book"></i>
            <span>Consulta Clientes</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link btn btn-outline-success text-left"></a>
        <i class="fa fa-trophy"></i>
        <span>Recompensas</span>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-file-invoice-dollar"></i>
                <span>Cotizaciones</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a href="{{ route('clientessmall') }}" class="dropdown-item">
                    <i class="fa fa-file-invoice-dollar"></i>
                    <span>Nueva Cotizacion</span>
                </a>
                <a href="{{ route('cotizacion.index') }}" class="dropdown-item">
                    <i class="fa fa-list-ol"></i>
                    <span>Consultar Cotizaciones</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="salones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-building"></i>
                <span>Salones</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="salones">
                <a href="{{ route('chart.index')  }}" class="dropdown-item">Consulta de Eventos</a>
                <a href="{{ route('eventos.index') }}" class="dropdown-item">Configuracion Eventos</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="{{ route('salir') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-sign-out-alt"></i>
            <span>Cerrar Session</span>
        </a>
    </li>
</ul>
@endsection

@section('recep-ventas')
<ul class="nav flex-column">
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="dropdownHome"
            data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                <i class="fa fa-home"></i>
                <span>{{ __('Home') }}</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownHome">
                <a href="{{ route('dashboard') }}" class="dropdown-item">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="{{ route('clientes.index') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-list-alt"></i>
            <span>Consulta de Clientes</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-trophy"></i>
            <span>Recompensas</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-star"></i>
            <span>Another Action</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('clientes.create') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-user-plus"></i>
            <span>Agregra Cliente</span>
        </a>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-file-invoice-dollar"></i>
                <span>Cotizaciones</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a href="{{ route('clientessmall') }}" class="dropdown-item">
                    <i class="fa fa-file-invoice-dollar"></i>
                    <span>Nueva Cotizacion</span>
                </a>
                <a href="{{ route('cotizacion.index') }}" class="dropdown-item">
                    <i class="fa fa-list-ol"></i>
                    <span>Consultar Cotizaciones</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="salones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-building"></i>
                <span>Salones</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="salones">
                <a href="{{ route('chart.index')  }}" class="dropdown-item">Consulta de Eventos</a>
                <a href="{{ route('eventos.index') }}" class="dropdown-item">Configuracion Eventos</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="{{ route('salir') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-sign-out-alt"></i>
            <span>Cerrar Session</span>
        </a>
    </li>
</ul>
@endsection

@section('recep-dist-ventas')
<ul class="nav flex-column">
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="dropdownHome"
            data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                <i class="fa fa-home"></i>
                <span>{{ __('Home') }}</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownHome">
                <a href="{{ route('dashboard') }}" class="dropdown-item">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" tupe="button" 
            id="dropdownMenu1" data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                <i class="fa fa-address-book"></i>
                <span>Clientes</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <a href="{{ route('clientes.create') }}" class="dropdown-item">
                    <i class="fa fa-user-plus"></i>
                    <span>Agregar Cliente</span>
                </a>
                <a href="{{ route('clientes.index') }}" class="dropdown-item">
                    <i class="fa fa-list-alt"></i>
                    <span>Conuslta de Clientes</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="dropdownPuntos"
            data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                <i class="fa fa-trophy"></i>
                <span>Recompensas</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownPuntos">
                <a href="" class="dropdown-item">
                    <i class="fa fa-trophy"></i>
                    <span>Consulta Recompensas</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-file-invoice-dollar"></i>
                <span>Cotizaciones</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a href="{{ route('clientessmall') }}" class="dropdown-item">
                    <i class="fa fa-file-invoice-dollar"></i>
                    <span>Nueva Cotizacion</span>
                </a>
                <a href="{{ route('cotizacion.index') }}" class="dropdown-item">
                    <i class="fa fa-list-ol"></i>
                    <span>Consultar Cotizaciones</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="salones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-building"></i>
                <span>Salones</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="salones">
                <a href="{{ route('chart.index')  }}" class="dropdown-item">
                    <i class="far fa-chart-bar"></i>
                    <span>Consulta de Eventos</span>
                </a>
                <a href="{{ route('eventos.index') }}" class="dropdown-item">
                    <i class="fas fa-tools"></i>
                    <span>Config de Eventos</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link btn btn-outline-success text-left" type="button" id="encuesta" data-toggle="dropdown"
            aria-hospopup="true" aria-expanded="false">
                <i class="fa fa-poll"></i>
                <span>Encuesta de Servicio</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="encuesta">
                <a href="" class="dropdown-item">
                    <i class="fa fa-chart-bar"></i>
                    <span>Grafica Resultados</span>
                </a>
                <a href="" class="dropdown-item">
                    <i class="far fa-list-alt"></i>
                    <span>Lista de Preguntas</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="{{ route('salir') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-sign-out-alt"></i>
            <span>Cerrar Session</span>
        </a>
    </li>
</ul>
@endsection
