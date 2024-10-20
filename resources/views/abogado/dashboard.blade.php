@extends('layouts.abogado')

@section('content')
<div class="container">
    <h1>Dashboard de {{ $abogado->nombre }}</h1>
    <h2>Solicitudes de Asesoría</h2>
    <ul>
        @foreach ($solicitudes as $solicitud)
            <li>
                <strong>Nombre:</strong> {{ $solicitud->nombre }} <br>
                <strong>Teléfono:</strong> {{ $solicitud->telefono }} <br>
                <strong>Correo:</strong> {{ $solicitud->correo }} <br>
                <strong>Descripción:</strong> {{ $solicitud->descripcion }} <br>
                <small>Enviado el: {{ $solicitud->created_at }}</small>
            </li>
        @endforeach
    </ul>
</div>
@endsection
