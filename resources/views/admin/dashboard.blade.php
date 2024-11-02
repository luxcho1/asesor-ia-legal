@extends('layouts.admin')
@section('content')

<div class="container mt-5">
    <!-- Mensaje de éxito o error -->
    @if (session('mensaje'))
        <div class="alert alert-{{ session('tipo_mensaje', 'success') }} alert-dismissible fade show text-center" role="alert">
            {{ session('mensaje') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Título del Dashboard -->
    <h1 class="text-center mb-4">Panel de Administración - AsesorIA Legal</h1>

    <!-- Card Centralizada -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQiyLSKUbHfdcvs1yqFLEY-55w93KtwswAsQ&s" 
                     class="card-img-top mx-auto mt-4" 
                     alt="Imagen del Panel" 
                     style="width: 250px; height: auto;">
                <div class="card-body text-center" style="background-color: #212529;">
                    <h2 class="card-title text-light mb-4">Panel Registro de Abogados</h2>
                    <div class="d-grid gap-3 col-8 mx-auto">
                        <a class="btn btn-success" href="{{ url('/abogados/create') }}" id="ingresarRegistro" name="ingresarRegistro">Ingresar Abogados</a>
                        <a class="btn btn-primary" href="{{ route('abogados.index') }}">Ver Abogados</a>
                        <a class="btn btn-warning" href="{{ url('/abogados/editar') }}" id="editarRegistro" name="editarRegistro">Editar Abogados</a>
                        <a class="btn btn-danger" href="{{ url('/abogados/eliminar') }}" id="eliminarRegistro" name="eliminarRegistro">Eliminar Abogados</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
    // Cerrar automáticamente el mensaje después de 5 segundos
    setTimeout(() => {
        const alert = document.querySelector('.alert');
        if (alert) {
            alert.classList.remove('show');
            alert.classList.add('fade');
        }
    }, 5000); // 5000 milisegundos = 5 segundos
</script>
