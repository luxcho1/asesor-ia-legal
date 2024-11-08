@extends('layouts.app')

@section('content')
@vite(['resources/css/auth.css'])
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-10 col-12">
            <div class="card">
                <div class="card-header">{{ __('Iniciar Sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 mt-2">
                            <label for="email" class="visually-hidden">{{ __('Correo Electrónico') }}</label>
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Correo Electronico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="password" class="visually-hidden">{{ __('Contraseña') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">
                                <button type="submit" class="btn custom-button w-100">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 text-center">
                                @if (Route::has('register'))
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('¿No tienes cuenta? CREA UNA') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        
                    </form>
                </div>
                <h6 style="text-align: center">Si eres abogado inicia sesion con el correo proporcionado </h6>
            </div>
        </div>
    </div>
</div>
@endsection
