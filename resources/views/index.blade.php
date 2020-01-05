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
    <div class="container-fluid">
        <div class="row">
            
            <nav class="collapse navbar-collapse col-md-3 col-lg-2 d-nono d-md-block sidebar" id="navbarResponsive">
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

                    @if($pRecepcion == 'yes' && $pAdmin=='' && $pDist=='' && $pGrupos=='')
                        @yield('recepcion')
                    @elseif($pGrupos == 'yes' && $pAdmin=='' && $pDist=='' && $pRecepcion=='')
                        @yield('ventas')
                    @elseif($pDist == 'yes' && $pAdmin=='' && $pRecepcion=='' && $pGrupos=='')
                        @yield('distinguido')
                    @elseif($pAdmin == 'yes' && $pDist=='' && $pRecepcion=='' && $pGrupos=='')
                        @yield('admin')
                    @elseif($pDist == 'yes'  && $pGrupos == 'yes' && $pRecepcion == '' && $pAdmin=='')
                        @yield('dist-ventas')
                    @elseif($pDist == 'yes' && $pRecepcion == 'yes' && $pAdmin=='' && $pGrupos=='')
                        @yield('disti-recep')
                    @elseif($pGrupos == 'yes' && $pRecepcion == 'yes' && $pAdmin=='' && $pDist=='')
                        @yield('recep-ventas')
                    @elseif($pGrupos == 'yes' && $pRecepcion == 'yes' && $pDist == 'yes' && $pAdmin=='')
                        @yield('recep-dist-ventas')
                    @endif
                </div>
            </nav>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--<a class="navbar-brand" href="#">Container</a>-->
            <!--<button id="bottonRes" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>-->
            <div class="collapse navbar-collapse" id="navbars">
                <!--<ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <span class="border border-success">
                            <img src="{{ asset('img/copacabana.jpg') }}" class="border" alt="" width="40" heigh="40">
                        </span>
                    </li>
                </ul>-->
                <ul class="navbar-nav my-2 my-md-0" id="opcionesUser">
                    <li class="nav-item ">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>{{ session('Nombre') }}</span>
                            <i class=""></i>
                        </a>
                        <!--<div class="dropdown-menu dropdown-menu-md-right">
                            <a href="{{ route('salir') }}" class="dropdown-item">
                                <i class="fa fa-sign-out-alt"></i>
                                <span>Cerrar Session</span>
                            </a>
                        </div>-->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--<hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>-->

    <script type="text/javascript">
    @if(session('messageDB'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.options.closeButton = true;
                toastr.options.escapeHtml = true;
                toastr.options.progressBar = true;
                toastr.info("{{ Session::get('messageDB') }}","{{ Session::get('messageHeader') }}",{timeOut :  15000});
                break;

            case 'warning':
                toastr.options.closeButton = true;
                toastr.options.escapeHtml = true;
                toastr.options.progressBar = true;
                toastr.warning("{{ Session::get('messageDB') }}","{{ Session::get('messageHeader') }}",{timeOut :  15000});
                break;

            case 'success':
                toastr.options.closeButton = true;
                toastr.options.escapeHtml = true;
                toastr.options.progressBar = true;  
                toastr.success("{{ Session::get('messageDB') }}","{{ Session::get('messageHeader') }}",{timeOut :  15000});
                break;

            case 'error':
                toastr.options.closeButton = true;
                toastr.options.escapeHtml = true;
                toastr.options.progressBar = true;
                toastr.error("{{ Session::get('messageDB') }}","{{ Session::get('messageHeader') }}",{timeOut :  15000});
                break;
        }
    @endif
    </script>
    
    
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>-->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>-->
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>-->
    
    <!-- dataTables -->
    <script type="text/javascript" src="{{ asset('js/datatables.min.js') }}" defer></script>
    <script src="{{ asset('js/agency.js') }}"></script>
</body>
</html>