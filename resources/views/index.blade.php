<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRM</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos-agencia.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <!--<a class="navbar-brand" href="#">Container</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>-->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <img src="{{ asset('img/copacabana.jpg') }}" alt="" width="50" heigh="50">
                    </li>
                </ul>
                <ul class="navbar-nav my-2 my-md-0">
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog"></i>
                            <span></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md-right">
                            <a href="" class="dropdown-item">
                                <i class="fa fa-user-cog"></i>
                                <span>Configuraciones</span>
                            </a>
                            <a href="" class="dropdown-item">Another action</a>
                            <a href="{{ route('iniciar') }}" class="dropdown-item">
                                <i class="fa fa-sign-out-alt"></i>
                                <span>Cerrar Session</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a href="" class="navbar-brand col-sm-3 col-md-2 mr-0">Logo</a>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
            <div class="dropdown-menu" aria-labelledby="dropdown07">
                <a href="#" class="dropdown-item">Opcion 1</a>
                <a href="#" class="dropdown-item">Opcion 2</a>
                <a href="#" class="dropdown-item">Cerra Session</a>
            </div>
        </li>
    </nav>-->

    <!--<div class="container-fluid">
        <div class="row">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" 
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    MENU
                    <i class="fas fa-bars"></i>
                </button>
            <nav class="collapse navbar-collapse col-md-2 d-nono d-md-block bg-light sidebar">
                <div class="sidebar-sticky">

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="" class="nav-link active text-center">
                                <i class="fa fa-address-book"></i>
                                <span>Opcion 1</span>
                            </a>
                        </li>
                        <li class="nav-item text-center">
                            <a href="" class="nav-link">
                                <i class="fa fa-archive"></i>
                                <span>Opcion 2</span>
                            </a>
                        </li>
                        <li class="nav-item text-center">
                            <a href="" class="nav-link">
                                <i class="fa fa-archway"></i>
                                <span>Opcion 3</span>
                            </a>
                        </li>
                        <li class="nav-item text-center">
                            <a href="" class="nav-link">
                                <i class="fa fa-atlas"></i>
                                <span>Opcion 4</span>
                            </a>
                        </li>
                        <li class="nav-item text-center">
                            <a href="" class="nav-link">
                                <i class="fa fa-atom"></i>
                                <span>Opcion 5</span>
                            </a>
                        </li>
                        <li class="nav-item text-center">
                            <a href="" class="nav-link">
                                <i class="fa fa-chart-area"></i>
                                <span>Opcion 6</span>
                            </a>
                        </li>
                        <li class="nav-item text-center">
                            <a href="" class="nav-link">
                                <i class="fa fa-chart-bar"></i>
                                <span>Opcion 7</span>
                            </a>
                        </li>
                        <li class="nav-item text-center">
                            <a href="" class="nav-link">
                                <i class="fa fa-chart-line"></i>
                                <span>Opcion 8</span>
                            </a>
                        </li>
                        <li class="nav-item text-center">
                            <a href="" class="nav-link">
                                <i class="fa fa-chart-pie"></i>
                                <span>Opcion 9</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="col-md-10"></div>

        </div>
    </div>-->

    <!-- codigo para llamar la seccion a esta vista por medio del boton
    <div class="container">
        <a href="{{ route('prospectos') }}" class="btn btn-primary">Prueba</a>
    </div>-->

    <div class="container">
        @yield('prospectos')
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>