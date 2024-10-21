<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet" />
<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

@extends('layouts.abogado')
@section('content')
<div class="container" >
    <div class="row" style="text-align: center">
        <h1>Bienvenido {{ $abogado->name }}</h1>
        <h5>Que tengas un buen dia!</h5>
    </div>
</div>

<<!-- Panel de Métricas -->
<div class="container my-4">
    <div class="row" style="text-align: center">
        <h3>Panel de métricas y estadísticas</h3>
    </div>
    <div class="row text-center">
        <div class="col">
            <div class="card bg-light mb-3">
                <div class="card-header">Total de Solicitudes</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalSolicitudes }}</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-light mb-3">
                <div class="card-header">Atendidas</div>
                <div class="card-body">
                    {{-- <h5 class="card-title">{{ $solicitudesAtendidas }}</h5> --}}
                    <h5>3</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-light mb-3">
                <div class="card-header">Cerradas</div>
                <div class="card-body">
                    {{-- <h5 class="card-title">{{ $solicitudesCerradas }}</h5> --}}
                    <h5>0</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 50px;">
    <div class="card bg-light">
        <div class="card-body">
            <div class="row" style="text-align: center;">
                <h3>Estos son tus ultimos clientes que desean usar tus servicios</h3>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <button type="button" class="btn btn-warning">Exportar solicitudes</button>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" style="margin-top: 10px;">
                @foreach ($solicitudes as $solicitud)
                    <div class="col d-flex">
                        <div class="card h-100 w-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">{{ $solicitud->nombre }}</h5>
                                <ul class="list-unstyled">
                                    <li><strong>Email:</strong> <a href="mailto:{{ $solicitud->correo }}">{{ $solicitud->correo }}</a></li>
                                    <li><strong>Teléfono:</strong> +569 {{ $solicitud->telefono }}</li>
                                </ul>
                                <p class="card-text text-truncate mb-4" style="max-height: 3.5em;">
                                    <strong>Descripción del caso:</strong>
                                    <br>
                                    {{ $solicitud->descripcion }}
                                    <li><strong>Fecha de Solicitud:</strong> {{ $solicitud->created_at->format('d-m-Y') }}</li>
                                </p>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalMensaje">
                                    Enviar Mensaje
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Calendario -->
<div class="container my-5" >
    <div class="row" style="text-align: center">
        <h3>Calendario</h3>
    </div>
    <div class="row">
        <div class="col">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <div id="calendar" style="max-width: 700px; margin: 0 auto;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






<!-- Modal -->
<div class="modal fade" id="modalMensaje" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enviar Mensaje</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <textarea class="form-control" rows="4" placeholder="Escribe tu mensaje aquí..."></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'es', // Idioma en español
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: [
                // Ejemplo de evento estático
                {
                    title: 'Reunión con cliente',
                    start: '2024-10-25',
                    end: '2024-10-25',
                },
                {
                    title: 'Caso Civil',
                    start: '2024-10-28T10:00:00',
                    end: '2024-10-28T12:00:00',
                }
            ]
        });

        calendar.render();
    });
</script>
