@extends('layouts.app')
@section('content')
@vite(['resources/js/chats.js'])
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-10 col-12">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h3>Chatbot de Asesoría en Leyes tributarias</h3>
                </div>

                <div id="chat-history" class="card-body chat-box" style="max-height: 300px; overflow-y: auto;">
                    @guest
                        <div class="alert alert-warning" role="alert">
                            {{ __('Por favor, inicia sesión para usar el chatbot y guardar tu historial de chat.') }}
                        </div>
                    @else
                        <!-- Historial del chat -->
                        @if (!empty($history))
                            @foreach ($history as $entry)
                                <!-- Mensaje del usuario -->
                                <div class="row mb-3">
                                    <div class="col"></div>
                                    <div class="col-7 d-flex justify-content-end">
                                        <p class="user-message">{{ $entry->user_message }}</p>
                                    </div>
                                </div>
                
                                <!-- Respuesta del chatbot -->
                                <div class="row mb-3">
                                    <div class="col" >
                                        <p class="bot-message"> {{ $entry->bot_reply }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                
                        <!-- Mensaje actual (nueva consulta) -->
                        @if (isset($userMessage) && isset($botReply))
                            <div class="row mb-3">
                                <div class="col"></div>
                                <div class="col-7 d-flex justify-content-end">
                                    <p class="user-message">{{ $userMessage }}</p>
                                </div>
                            </div>
                
                            <div class="row mb-3">
                                <div class="col">
                                    <!-- Agregamos un atributo data para identificar nueva consulta -->
                                    <p class="bot-message"> <span id="botReply" data-new="true">{{ $botReply }}</span></p>
                                </div>
                            </div>
                        @endif
                    @endguest
                </div>


                <div class="card-footer">
                    <form action="{{ route('chatbot.tributaria') }}" method="POST" class="d-flex">
                        @csrf
                        <input type="text" name="askText" class="form-control me-2" placeholder="Escribe tu mensaje..." required>
                        <button type="submit" class="btn send-button">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="btn custom-button" href="{{ url('/chatbot') }}" id="regresar" name="regresar">Volver a Inicio</a>
            </div>

            <div class="row justify-content-center" style="margin-top: 20px">
                <div class="col-md-6 d-flex justify-content-center" style="">
                    <div class="card shadow-sm" style="width: 22rem; border-radius: 12px; overflow: hidden; margin: auto;">
                        <img 
                          src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhqVTDYk3uT9o7vDSCoLY74wTRfwq5Hd0XyP93qoXda_bSj2JoOe--8dVxKUIOodX6WX6-HGPEuOdEfEpIDwx0DwMnqCKwCHxPUB_SdBwm8Y15qTTjbaFzZzyjBIUhMllCWrVsPAMx51qUC4oCnm2ml5R8iNsKDMg41hGi9_ZGkFc-7JVJFOzFaBAe9/s587/saul-goodman.webp" 
                          class="card-img-top" 
                          alt="Abogado Especialista">
                        <div class="card-body text-center">
                            <p class="card-text mb-4">
                                ¿Quieres conocer a nuestros primeros abogados especialistas en asesoría Tributaria??
                            </p>
                            <a href="{{ url('/recomendacion/tributaria') }}" class="btn custom-button">
                                Más Información
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection