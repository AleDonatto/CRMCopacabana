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
    <!-- jquery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- toastr -->
    <script src="{{ asset('js/toastr.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.css') }}">
    <!-- dataTable-->
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <!--<a class="navbar-brand" href="#">Container</a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <span class="border border-success">
                            <img src="{{ asset('img/copacabana.jpg') }}" class="border" alt="" width="40" heigh="40">
                        </span>
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
                    <i class="fas fa-bars"></i>
            </button>
            <nav class="collapse navbar-collapse col-md-2 d-nono d-md-block sidebar" id="navbarResponsive">
                <!--<ul class="nav display-block">
                    <li>
                        <img class="mx-auto d-block" src="{{ asset('img/copacabana.jpg') }}" alt="" width="80" heigh="80">
                    </li>
                </ul>-->
                <div class="text-center">
                    <img src="{{ asset('img/copacabana.jpg') }}" class="border" alt="" width="80" heigh="80">
                </div>
                <hr class="sidebar-divider d-none d-md-block">
                <div class="sidebar-sticky">
                    @php
                        $pAdmin = session('pAdmin');
                        $pRecepcion = session('pRecepcion');
                        $pDist = session('pDist');
                        $pGrupos = session('pGrupos');
                    @endphp

                    @if($pRecepcion == 'yes')
                        @yield('recepcion')
                    @elseif($pGrupos == 'yes')
                        @yield('ventas')
                    @elseif($pDist == 'yes')
                        @yield('distinguido')
                    @elseif($pAdmin == 'yes')
                        @yield('admin')
                    @endif

                    <!--<hr class="sidebar-divider d-none d-md-block">
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>-->
                </div>
            </nav>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <div class="text-center">
                <span class="text-muted">Copyright &copy; Dtt's @php echo date("Y"); @endphp</span>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
    @if(session('messageDB'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.options.closeButton = true;
                toastr.options.escapeHtml = true;
                toastr.info("{{ Session::get('messageDB') }}","{{ Session::get('messageHeader') }}",{timeOut :  15000});
                break;

            case 'warning':
                toastr.options.closeButton = true;
                toastr.options.escapeHtml = true;
                toastr.warning("{{ Session::get('messageDB') }}","{{ Session::get('messageHeader') }}",{timeOut :  15000});
                break;

            case 'success':
                toastr.options.closeButton = true;
                toastr.options.escapeHtml = true;
                //toastr.opcions.progressBar = true;  
                toastr.success("{{ Session::get('messageDB') }}","{{ Session::get('messageHeader') }}",{timeOut :  15000});
                break;

            case 'error':
                toastr.options.closeButton = true;
                toastr.options.escapeHtml = true;
                toastr.error("{{ Session::get('messageDB') }}","{{ Session::get('messageHeader') }}",{timeOut :  15000});
                break;
        }
    @endif
    </script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>-->
    
    <!-- dataTables -->
    <script type="text/javascript" src="{{ asset('js/datatables.min.js') }}" defer></script>
    <script src="{{ asset('js/agency.js') }}"></script>
</body>
</html>