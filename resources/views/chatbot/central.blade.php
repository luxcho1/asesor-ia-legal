@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Tarjeta del chatbot para nuevas consultas -->
            <div class="card shadow-lg">
                <div class="card-header bg-dark text-white text-center">
                    <h3>Chatbot de Asesoría central</h3>
                    <h6>El chatbot puede cometer errores, compruebe la informacion importante en la pagina de la bcn de chile en caso de cualquier duda con algun decreto o ley</h6>
                </div>
                <div class="card-body chat-box" style="max-height: 300px; overflow-y: auto;">
                    <!-- Consultas recientes -->
                    <div id="chat-current">
                        <!-- Aquí se mostrarán las consultas recientes -->
                    </div>
                </div>
                <div class="card-footer">
                    <form id="chat-form" class="d-flex">
                        @csrf
                        <input type="text" name="askText" class="form-control me-2" placeholder="Escribe tu mensaje..." required>
                        <button type="submit" class="btn btn-primary me-2">Enviar</button>
                    </form>
                </div>
            </div>

            <!-- Botón para regresar a inicio y mostrar/ocultar historial -->
            <div class="text-center mt-4">
                <a class="btn btn-secondary" href="{{ url('/chatbot') }}" id="regresar" name="regresar">Volver a Inicio</a>
                <button type="button" id="toggle-history" class="btn btn-primary me-2">Ver Historial</button>
            </div>

            <!-- Sección del historial debajo del botón "Volver a Inicio" -->
            <div id="chat-history" class="card-body mt-4" style="display: none;">
                <h5>Historial de Conversaciones</h5>
                <div class="chat-box" style="max-height: 300px; overflow-y: auto;">
                    @if (!empty($history))
                        @foreach ($history as $entry)
                            <div class="mb-3">
                                <p><strong>Usuario:</strong> {{ $entry->Conversacion }}</p>
                                <p><strong>Chatbot:</strong> {{ $entry->bot_reply }}</p>
                            </div>
                        @endforeach
                    @else
                        <p>No hay historial disponible.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@vite(['resources/sass/chatbots.scss', 'resources/js/chatbots.js'])
<script>
    const chatbotAjaxUrl = "{{ route('chatbot.central.ajax') }}";
</script>
@endsection
