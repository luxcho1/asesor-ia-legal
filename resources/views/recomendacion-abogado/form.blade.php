@extends('layouts.app')
@section('content')

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
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del Caso</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
            </div>
            <br>
        <div class="row" >
            <div class="col"></div>
            <div class="col-6" style="text-align: center"><button type="submit" class="btn btn-primary">Enviar Solicitud</button></div>
            <div class="col"></div>
        </div>
        </form>
      </div>
      <div class="col">
      </div>
    </div>
  </div>
@endsection
