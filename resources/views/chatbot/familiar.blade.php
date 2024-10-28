@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Tarjeta del chatbot para nuevas consultas -->
            <div class="card shadow-lg">
                <div class="card-header bg-dark text-white text-center">
                    <h3>Chatbot de Asesoría en Leyes familiares</h3>
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
        <div class="col-md-6 d-flex justify-content-center mt-5">
            <div class="card shadow-sm" style="width: 22rem; border-radius: 12px; overflow: hidden;">
              <img 
                src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhqVTDYk3uT9o7vDSCoLY74wTRfwq5Hd0XyP93qoXda_bSj2JoOe--8dVxKUIOodX6WX6-HGPEuOdEfEpIDwx0DwMnqCKwCHxPUB_SdBwm8Y15qTTjbaFzZzyjBIUhMllCWrVsPAMx51qUC4oCnm2ml5R8iNsKDMg41hGi9_ZGkFc-7JVJFOzFaBAe9/s587/saul-goodman.webp" 
                class="card-img-top" 
                alt="Abogado Especialista">
              <div class="card-body text-center">
                <p class="card-text text-muted mb-4">
                  ¿Quieres conocer a nuestros primeros abogados especialistas en asesoría familiar?
                </p>
                <a href="{{ url('/recomendacion/familiar') }}" class="btn btn-outline-primary">
                  Más Información
                </a>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@vite(['resources/sass/chatbots.scss', 'resources/js/chatbots.js'])
<script>
    const chatbotAjaxUrl = "{{ route('chatbot.familiar.ajax') }}";
</script>
@endsection