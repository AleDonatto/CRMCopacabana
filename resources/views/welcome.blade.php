<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Copacabana Beach Hotel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">   

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 80vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 30px;
            }

            .links > a {
                color: #FFFFFF;
                padding: 15 30px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            hr{
                background-color: #428D57;
                height: 60px;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <hr> 
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <!--<div class="title m-b-md">
                    Welcome
                </div>-->
                <div class="">
                    <img src="{{ asset('img/copacabana.jpg') }}" alt="">
                </div>

                <div class="links">
                    <a href="{{ route('iniciar') }}" class="btn btn-success" >
                        <i class="fa fa-users"></i>
                        <span>Ventas y Grupos</span>    
                    </a>
                    <a href="{{ route('iniciar') }}" class="btn btn-success">
                        <i class="fa fa-concierge-bell"></i>
                        <span>Recepcion</span>
                    </a>
                    <a href="{{ route('iniciar') }} " class="btn btn-success">
                        <i class="fa fa-user-tie"></i>
                        <span>special user</span>
                    </a>
                    <a href="https://laravel-news.com" class="btn btn-success">
                        <i class="fa fa-user-check"></i>
                        <span>Clientes</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
