@extends('layouts.app')
@section('content')
@vite(['resources/js/home.js'])

<div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <div class="row">
      <div class="col">
      </div>
      <div class="col-6">
        <h1>Solicitud de Asesoría para {{ $abogado->name }}</h1>
        <form action="{{ route('abogados.enviarSolicitud', $abogado->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                @error('nombre')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" value="{{ old('telefono') }}" required>
                @error('telefono')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control @error('correo') is-invalid @enderror" id="correo" name="correo" value="{{ old('correo') }}" required>
                @error('correo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="descripcion">Descripción del Caso</label>
                <textarea class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" rows="4" required>{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            <br>
            <div class="row">
                <div class="col"></div>
                <div class="col-6" style="text-align: center">
                    <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                </div>
                <div class="col"></div>
            </div>
        </form>
        
      </div>
      <div class="col">
      </div>
    </div>
  </div>
@endsection
