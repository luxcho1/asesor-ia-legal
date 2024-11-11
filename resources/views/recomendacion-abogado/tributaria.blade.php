@extends('layouts.app')
@section('content')
@vite(['resources/js/home.js'])
@vite(['resources/js/recomendacion-abogado.js'])


<body>
<div class="container">
    <div class="row" style="text-align: center">
        <h1>Estos son nuestros abogados especialistas en Tributaria</h1>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($abogados as $abogado)
            @if ($abogado->especialidad === 'Tributaria')

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
                            {{-- <li><strong>Sueldo:</strong> {{ $abogado->sueldo }}</li> --}}
                        </ul>
                    
                    
                        
                        <div class="mb-3">
                            <strong>Biografía</strong> 
                            <p class="card-text" style="text-align: justify;">
                                {{ $abogado->biografia }}
                            </p>
                        </div>

                        <div class="mt-auto">
                            <a href="{{ route('abogados.solicitud', $abogado->id) }}" 
                               class="btn btn-success btn-block">
                                Solicitar Asesoría
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
    <div class="row">
        <div class="col-12 text-center mt-4">
            <a href="{{ url('/chatbot/tributaria') }}" class="btn btn-warning btn-lg">Regresar al chatbot</a>
        </div>
    </div>
</div>
</body>
@endsection

