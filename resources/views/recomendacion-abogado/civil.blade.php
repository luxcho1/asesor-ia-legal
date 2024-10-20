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

<div class="container py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($abogados as $abogado)
            @if ($abogado->especialidad === 'Civil')
                <div class="col d-flex">
                    <div class="card h-100 w-100">
                        <img class="card-img-top" 
                             src="{{ asset('storage/'.$abogado->imagen) }}" 
                             alt="{{ $abogado->nombre }}" 
                             style="height: 200px; object-fit: cover;">
                        
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">{{ $abogado->nombre }}</h5>
                            
                            <ul class="list-unstyled">
                                <li><strong>Especialidad:</strong> {{ $abogado->especialidad }}</li>
                                <li><strong>Email:</strong> <a href="mailto:{{ $abogado->email }}">{{ $abogado->email }}</a></li>
                                <li><strong>Teléfono:</strong> {{ $abogado->telefono }}</li>
                                <li><strong>Sueldo:</strong> {{ $abogado->sueldo }}</li>
                            </ul>

                            <p class="card-text text-truncate mb-4" style="max-height: 3.5em;">
                                <strong>Biografía:</strong> {{ $abogado->biografia }}
                            </p>

                            <div class="mt-auto">
                                <a href="{{ route('abogados.solicitud', $abogado->id) }}" 
                                   class="btn btn-primary btn-block">
                                    Solicitar Asesoría
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>




</body>
@endsection

