@extends('layouts.admin')
@section('content')
<div class="container text-center" style="padding-top: 5%; padding-bottom: 5%;">
    <div class="row">
        @foreach($abogados as $abogado)
            <div class="col-md-3 mb-4"> {{-- 4 cards por fila en pantallas medianas y superiores --}}
                <div class="card" style="align-content: center">
                    <img class="img-thumbnail img-fluid" src="{{ asset('storage/' . $abogado->imagen) }}" width="100" alt="">

                    <div class="card-body">
                        <h5 class="card-title">{{ $abogado->name }}</h5>
                        <p class="card-text"><strong>Especialidad:</strong> {{ $abogado->especialidad }}</p>
                        <p class="card-text"><strong>Email:</strong> {{ $abogado->email }}</p>
                        <p class="card-text"><strong>Teléfono:</strong> {{ $abogado->telefono }}</p>
                        <p class="card-text"><strong>Sueldo:</strong> {{ $abogado->sueldo }}</p>
                        <p class="card-text"><strong>Biografía:</strong> {{ $abogado->biografia }}</p>
                        <p class="card-text"><strong>id:</strong> {{ $abogado->abogado_id }}</p>
                        <a href="{{ route('abogados.show', $abogado->id) }}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
        <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg">Regresar</a>
    </div>
    {{-- Paginación --}}
    {{-- {{ $abogados->links() }} --}}

    {{-- Incluir la lista de abogados con especialidad civil --}}
    {{-- @include('recomendacion-abogado.civil', ['abogados' => $abogados]) --}}
</div>
@endsection