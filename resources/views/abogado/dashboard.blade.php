@extends('layouts.abogado')

@section('content')
<div class="container py-5">
    <h1 class="text-center fw-bold mb-5">Bienvenido, Abogado</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-semibold">Carlos Ramírez</h5>
                    <p class="card-text text-muted mb-2">
                        <strong>Teléfono:</strong> +56912345678
                    </p>
                    <p class="card-text text-muted mb-2">
                        <strong>Email:</strong> carlos.ramirez@gmail.com
                    </p>
                    <p class="card-text text-muted">
                        <strong>Descripción del caso:</strong> 
                        Solicita asesoría para resolver un conflicto por incumplimiento de contrato con una empresa constructora.
                    </p>
                </div>
                <div class="card-footer text-center bg-white">
                    <a href="#" class="btn btn-outline-primary w-100">Contactar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-semibold">María Fernández</h5>
                    <p class="card-text text-muted mb-2">
                        <strong>Teléfono:</strong> +56998765432
                    </p>
                    <p class="card-text text-muted mb-2">
                        <strong>Email:</strong> maria.fernandez@hotmail.com
                    </p>
                    <p class="card-text text-muted">
                        <strong>Descripción del caso:</strong> 
                        Busca representación legal para un proceso de divorcio con custodia compartida de menores.
                    </p>
                </div>
                <div class="card-footer text-center bg-white">
                    <a href="#" class="btn btn-outline-primary w-100">Contactar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-semibold">Roberto Gutiérrez</h5>
                    <p class="card-text text-muted mb-2">
                        <strong>Teléfono:</strong> +56944556677
                    </p>
                    <p class="card-text text-muted mb-2">
                        <strong>Email:</strong> roberto.gutierrez@empresa.com
                    </p>
                    <p class="card-text text-muted">
                        <strong>Descripción del caso:</strong> 
                        Necesita asesoramiento para iniciar un proceso de despido por causa justificada en su empresa.
                    </p>
                </div>
                <div class="card-footer text-center bg-white">
                    <a href="#" class="btn btn-outline-primary w-100">Contactar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-semibold">Sofía Castro</h5>
                    <p class="card-text text-muted mb-2">
                        <strong>Teléfono:</strong> +56977889900
                    </p>
                    <p class="card-text text-muted mb-2">
                        <strong>Email:</strong> sofia.castro@yahoo.com
                    </p>
                    <p class="card-text text-muted">
                        <strong>Descripción del caso:</strong> 
                        Requiere asesoría para impugnar una multa de tránsito injustificada.
                    </p>
                </div>
                <div class="card-footer text-center bg-white">
                    <a href="#" class="btn btn-outline-primary w-100">Contactar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-semibold">Andrés Pérez</h5>
                    <p class="card-text text-muted mb-2">
                        <strong>Teléfono:</strong> +56912349876
                    </p>
                    <p class="card-text text-muted mb-2">
                        <strong>Email:</strong> andres.perez@legalmail.com
                    </p>
                    <p class="card-text text-muted">
                        <strong>Descripción del caso:</strong> 
                        Busca asesoramiento sobre procedimientos de herencia y testamentos.
                    </p>
                </div>
                <div class="card-footer text-center bg-white">
                    <a href="#" class="btn btn-outline-primary w-100">Contactar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
