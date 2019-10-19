<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRM</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos-agencia.css') }} ">
    <!-- fontawesome-free-icons-->
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.min.css') }}">
    <!-- fontawesome
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">-->
    <!-- jquery 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- toastr -->
    <script src="{{ asset('js/toastr.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.css') }}">
    <!-- dataTable 
    <link rel="stylesheet" href="{{ asset('css/mdb.css') }}">-->
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">


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
                    <li class="nav-item">
                        <img src="{{ asset('img/copacabana.jpg') }}" alt="" width="40" heigh="40">
                    </li>
                </ul>
                <ul class="navbar-nav my-2 my-md-0">
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>{{ session('Nombre') }}</span>
                            <i class="fa fa-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md-right">
                            <a href="{{ route('salir') }}" class="dropdown-item">
                                <i class="fa fa-sign-out-alt"></i>
                                <span>Cerrar Session</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" 
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    MENU
                    <i class="fas fa-bars"></i>
            </button>
            <nav class="collapse navbar-collapse col-md-2 d-nono d-md-block bg-light sidebar" id="navbarResponsive">
                <div class="sidebar-sticky">
                    @php
                        $permiso = session('Permiso');
                    @endphp

                    @if($permiso == 1)
                        @yield('recepcion')
                    @elseif($permiso == 2)
                        @yield('ventas')
                    @elseif($permiso == 3)
                        @yield('admin')
                    @endif
                </div>
            </nav>
        </div>
    </div>

    <script type="text/javascript">
    @if(session('messageDB'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.options.closeButton = true;
                toastr.options.escapeHtml = true;
                toastr.info("{{ Session::get('messageDB') }}","Lorem ipsum dolor sit amet consectetur",{timeOut :  5000});
                break;

            case 'warning':
                toastr.options.closeButton = true;
                toastr.options.escapeHtml = true;
                toastr.warning("{{ Session::get('messageDB') }}","Lorem ipsum dolor sit amet consectetur",{timeOut :  5000});
                break;

            case 'success':
                toastr.options.closeButton = true;
                toastr.options.escapeHtml = true;
                //toastr.opcions.progressBar = true;  
                toastr.success("{{ Session::get('messageDB') }}","Lorem ipsum dolor sit amet consectetur",{timeOut :  5000});
                break;

            case 'error':
                toastr.options.closeButton = true;
                toastr.options.escapeHtml = true;
                toastr.error("{{ Session::get('messageDB') }}","Lorem ipsum dolor sit amet consectetur",{timeOut :  5000});
                break;
        }
    @endif
    </script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>-->
    
    <!-- dataTables -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/datatables.min.js') }}" defer></script>
    <!--<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" ></script>-->
    <script src="{{ asset('js/agency.js') }}"></script>
</body>
</html>