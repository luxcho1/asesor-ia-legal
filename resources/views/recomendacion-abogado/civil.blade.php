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
                <div class="card h-100 w-100 text-center">
                    <div class="card-img-container mx-auto" 
                     style="width: 150px; height: 150px;  border-radius: 50%;">
                        <img class="card-img-top img-fluid" 
                            src="{{ asset('storage/' . $abogado->imagen) }}" 
                            alt="Imagen de {{ $abogado->name }}" 
                            style="width: 100%; height: 100%; object-fit: scale-down;">
                    </div>

                    <div class="card-body d-flex flex-column mb-3">
                        <h5 class="card-title">{{ $abogado->name }}</h5>
                        <ul class="list-unstyled mb-3" style="text-align: justify;">
                            <li><strong>Especialidad:</strong> {{ $abogado->especialidad }}</li>
                            <li><strong>Email:</strong> <a href="mailto:{{ $abogado->email }}">{{ $abogado->email }}</a></li>
                            <li><strong>Teléfono:</strong> +569 {{ $abogado->telefono }}</li>
                            <li><strong>Sueldo:</strong> {{ $abogado->sueldo }}</li>
                        </ul>
                    
                    
                        
                        <div class="mb-3">
                            <strong>Biografía:</strong> 
                            <p class="card-text" style="text-align: justify;">
                                {{ $abogado->biografia }}
                            </p>
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

