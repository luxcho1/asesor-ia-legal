@extends('layouts.admin')
@section('content')
<head>
    <div class="container">
        <h1 style="text-align: center">Eliminar Clientes</h1>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                @foreach($abogados as $abogado)
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
        
                                <form action="{{ url('/abogados/'.$abogado->id) }}" class="d-inline" method="post">
                                    <div class="row">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar" id="borrar" name="borrar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        
            <div class="mt-4 text-center">
                <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg">Regresar</a>
            </div>
        </div>

        {{-- <div class="row">
            @foreach($abogados as $abogado)
                <div class="col-md-4">
                    <div class="card" style="margin-bottom: 10%">
                        <div class="card-body" style="">
                            <h3 class="card-text">RUT</h3>
                            <h6>{{ $clientes->rut }}</h6>
                            <h3 class="card-text">Nombre</h3>
                            <h6>{{ $clientes->nombre }} {{ $clientes->apellido }}</h6>

                            <h6></h6>
                            <form action="{{ url('/abogado/'.$abogado->id) }}" class="d-inline" method="post">
                                <div class="row">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar" id="borrar" name="borrar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
        
@endsection