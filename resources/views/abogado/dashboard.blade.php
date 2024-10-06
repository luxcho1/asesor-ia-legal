@extends('layouts.abogado') <!-- Adjuntar ruta css -->
@section('content')
<body>
<h1 style="text-align: center">
    Bienvenido Claudio abogado
</h1>
<div class="container mt-5">
    <div class="row">
        @for ($i = 1; $i <= 6; $i++)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="d-flex justify-content-center mt-3">
                        <img src="https://randomuser.me/api/portraits/men/{{ $i }}.jpg" class="card-img-top" alt="Imagen del Usuario {{ $i }}" style="width: 100px; height: 100px; object-fit: cover;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Usuario {{ $i }}</h5>
                        <p class="card-text">Definición breve del caso legal del usuario {{ $i }}.</p>
                        <p class="card-text"><strong>Nombre:</strong> Nombre del Usuario {{ $i }}</p>
                        <p class="card-text"><strong>Contacto:</strong> +123456789{{ $i }}</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
</body>
@endsection