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
<div class="container mt-5">
    <div class="row">
        @for ($i = 1; $i <= 6; $i++)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="d-flex justify-content-center mt-3">
                        <img src="https://randomuser.me/api/portraits/men/{{ $i }}.jpg" class="card-img-top" alt="Imagen del Usuario {{ $i }}" style="width: 100px; height: 100px; object-fit: cover;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Abogado {{ $i }}</h5>
                        <p class="card-text">Definición breve del caso legal del abogado {{ $i }}.</p>
                        <p class="card-text"><strong>Nombre:</strong> Nombre del Usuario {{ $i }}</p>
                        <p class="card-text"><strong>Contacto:</strong> +123456789{{ $i }}</p>
                        <p class="card-text"><strong>Cobro:</strong> $500.000{{ $i }}</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
</body>
@endsection
