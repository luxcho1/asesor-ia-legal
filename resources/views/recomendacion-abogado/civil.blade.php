@extends('layouts.app')
@section('content')
<body>
<div class="row">
    <div class="col"></div>
    <div class="col" style="text-align: center">
        <h1>
            Estos son nuestros abogados especialistas en asesoria legal
        </h1>
        <a href="{{ url('/') }}" class="btn btn-primary">Ir a inicio</a>
    </div>
    <div class="col"></div>
</div>

<div class="col-md-3 mb-4">
    @foreach ($abogados as $abogado)
            @if ($abogado->especialidad === 'Civil')
            <div class="card">
                <img class="img-thumbnail img-fluid" src="{{ asset('storage'.'/'.$abogado->imagen) }}" width="100" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $abogado->nombre }}</h5>
                    <p class="card-text"><strong>Especialidad:</strong> {{ $abogado->especialidad }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $abogado->email }}</p>
                    <p class="card-text"><strong>Teléfono:</strong> {{ $abogado->telefono }}</p>
                    <p class="card-text"><strong>Sueldo:</strong> {{ $abogado->sueldo }}</p>
                    <p class="card-text"><strong>Biografía:</strong> {{ $abogado->biografia }}</p>
                    <a href="{{ route('abogados.show', $abogado->id) }}" class="btn btn-primary">Contactar</a>
                </div>
            </div>
            @endif
        @endforeach  
</div>
</body>
@endsection

