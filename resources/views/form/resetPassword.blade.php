@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10">
    <section class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Reset Password') }}</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('resetpassword') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('id Usuario') }}</label>
                                        <div class="col-md-6">
                                            <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ $idusuario ?? old(' ') }}" disabled>
                                            <input type="hidden" name="user" value="{{ $idusuario }}">
                                            @error('id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Reset Password') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if(session('dospassword'))
                            <div class="alert alert-danger" role="alert">
                                <span>{{ Session::get('dospassword') }}</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>    
    </section>
</main>
