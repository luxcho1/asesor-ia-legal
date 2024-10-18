@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-dark text-white text-center">
                    <h3>Chatbot de Asesoría en Leyes Familiares</h3>
                </div>
                <div id="chat-history" class="card-body chat-box" style="max-height: 300px; overflow-y: auto;">
                    @guest
                        <div class="alert alert-warning" role="alert">
                            {{ __('Please log in to use the chatbot and save your chat history.') }}
                        </div>
                    @else
                        @if (!empty($history))
                            @foreach ($history as $entry)
                                <div class="mb-3">
                                    <p><strong>Usuario:</strong> {{ $entry->Conversacion }}</p>
                                    <p><strong>Chatbot:</strong> {{ $entry->bot_reply }}</p>
                                </div>
                            @endforeach
                        @endif
                        @if (isset($userMessage) && isset($botReply))
                            <div class="mb-3">
                                <p><strong>Usuario:</strong> {{ $userMessage }}</p>
                                <p><strong>Chatbot:</strong> <span id="botReply">{{ $botReply }}</p>
                            </div>
                        @endif
                    @endguest
                </div>
                <div class="card-footer">
                    <form action="{{ route('chatbot.familiar') }}" method="POST" class="d-flex">
                        @csrf
                        <input type="text" name="askText" class="form-control me-2" placeholder="Escribe tu mensaje..." required>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="btn btn-secondary" href="{{ url('/chatbot') }}" id="regresar" name="regresar">Volver a Inicio</a>
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
