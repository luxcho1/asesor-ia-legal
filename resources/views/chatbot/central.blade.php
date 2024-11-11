@extends('layouts.app')
@section('content')
@vite(['resources/js/chats.js'])
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-10 col-12">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <div class="row">
                        <h3>Chatbot de Asesoría central</h3>
                    </div>
                    <div class="row">
                        <h6>El chatbot puede cometer errores, compruebe la informacion importante en la pagina de la bcn de chile en caso de cualquier duda con algun decreto o ley</h6>
                    </div>
                    <div  class="alert alert-warning" role="alert">
                        {{ __('Si desea guardar su historial le recomendamos iniciar sesion') }}
                    </div>
                </div>


                <div id="chat-history" class="card-body chat-box" style="max-height: 300px; overflow-y: auto;">
                    {{-- @guest --}}
                        {{-- <div class="alert alert-warning" role="alert">
                            {{ __('Por favor, inicia sesión para usar el chatbot y guardar tu historial de chat.') }}
                        </div> --}}
                    {{-- @else --}}
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
                    {{-- @endguest --}}
                </div>




                <div class="card-footer">
                    <form action="{{ route('chatbot.central') }}" method="POST" class="d-flex">
                        @csrf
                        <input type="text" name="askText" class="form-control me-2" placeholder="Escribe tu mensaje..." required>
                        <button type="submit" class="btn send-button">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="btn custom-button" href="{{ url('/chatbot') }}" id="regresar" name="regresar">Volver a Inicio</a>
            </div>
        </div>
    </div>
</div>
@endsection
