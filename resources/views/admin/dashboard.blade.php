@extends('layouts.admin')
@section('content')
<h1 style="text-align: center">Panel admin AsesorIA Legal</h1>
<div class="container">
    <div class="row">
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQiyLSKUbHfdcvs1yqFLEY-55w93KtwswAsQ&s" class="card-img-top" alt="" style="width: 250px; height: auto; margin: 0 auto;">
                <div class="card-body" style="background-color: #212529;">
                <h2 class="card-title" style="color: aliceblue; text-align: center">Panel Registro Abogados</h2>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <a class="btn btn-success" href="{{ url('/abogados/create') }}" id="ingresarRegistro" name="ingresarRegistro">Ingresar Registros de horas</a>
                  <a class="btn btn-primary" href="{{ route('abogados.index') }}">Ver Abogados</a>

                  <a class="btn btn-warning" href="{{ url('/registro/editar') }}" id="editarRegistro" name="editarRegistro">Editar Abogados</a>
                  <a class="btn btn-danger" href="{{ url('/registro/eliminar') }}" id="eliminarRegistro" name="eliminarRegistro">Eliminar Abogados</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection