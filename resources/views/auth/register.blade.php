@extends('layouts.app')

@section('content')
@vite(['resources/css/auth.css'])
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-10 col-12">
            <div class="card">
                <div class="card-header">{{ __('Registrar Usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 visually-hidden col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 visually-hidden col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Correo Electronico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 visually-hidden col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-5">
                            <label for="password-confirm" class="col-md-4 visually-hidden col-form-label text-md-end">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" placeholder="Confirmar Contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row bm-2">
                            <p class="text-center">Al registrarse acepta nuestras condiciones y las politicas de privacidad. </p>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-10 offset-md-1">
                                <button type="submit" class="btn custom-button w-100">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 text-center">
                                @if (Route::has('login'))
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Tienes una cuenta? INICIA SESION') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
