@extends('index')

@section('admin')
<ul class="nav flex-column">
    <li class="nav-item">
        <a data-scroll href="{{ route('formclients') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-address-book"></i>
            <span>Clientes y Habitacion</span>
        </a>
    </li>
    <li class="nav-item">
        <a data-scroll href="{{route('clientes.index') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-address-book"></i>
            <span>Consulta Clientes</span>
        </a>
    </li>
    <li class="nav-item">
        <a data-scroll href="#" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-chart-bar"></i>
            <span>Evaluacion del cliente</span>
        </a>
    </li>
    <li class="nav-item">
        <a data-scroll href="#" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-address-book"></i>
            <span>Grupos</span>
        </a>
    </li>
    <li class="nav-item">
        <a data-scroll href="{{ route('formUser') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-user-plus"></i>
            <span>Crear Usuarios</span>
        </a>
    </li>
    <li class="nav-item">
        <a data-scroll href="{{ route('listUser') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-users-cog"></i>
            <span>Configuracion Usuarios</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('permisos') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-user-tag"></i>
            <span>Permisos de Usuarios</span>
        </a>
    </li>
</ul>
@endsection

@section('recepcion')
<ul class="nav flex-column">
    <li class="nav-item">
        <a href="{{ route('formclients') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-user-plus"></i>
            <span>Agregar Cliente</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link btn btn-outline-success text-left">
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
</ul>
@endsection

@section('ventas')
<ul class="nav flex-column">
    <li class="nav-item">
        <a href="" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-bootstrap"></i>
            <span>Another Action</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('formclients') }}" class="nav-link btn btn-outline-success text-left">
            <i class="fa fa-user-plus"></i>
            <span>Agregar Clientes</span>
        </a>
    </li>
</ul>
@endsection
