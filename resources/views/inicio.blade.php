<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Copacanaba Beach Hotel</title>
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    
    <style>
    html,body{
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
     }

    .full-height {
        height: 100vh;
    }

    .flex-center {
       align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .content {
        text-align: center;
    }
    </style>
    
</head>
<body>
    <div class="cantainer bg-light flex-center position-ref full-height">
        <div class="contend">
            <div class="text-center">
                <img src="{{ asset('img/copacabana.jpg') }}" alt="" class="rounded" width="200" heigh="200">
                <h6 >Login</h6>

                <form action="{{ route('conn') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control @error('Nombre') is-invalid @enderror" name="Nombre" placeholder="User"
                        value="{{ old('Nombre') }}">

                        <!--{!! $errors->first('user','<span class="help-block">:messge</span>') !!}-->
                        
                        @error('Nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"
                        value="{{ old('Nombre') }}">

                        <!--{!! $errors->first('password','<span class="help-block">:message</span>') !!}-->

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn  btn-success text-uppercase" type="submit">
                        <i class="fa fa-sign-in-alt"></i>
                        <span>Ingresar</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>