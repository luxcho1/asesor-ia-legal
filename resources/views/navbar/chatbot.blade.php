@extends('layouts.app')
@section('content')
@vite(['resources/css/nav-content.css'])
@vite(['resources/css/chatbot.css'])

<body>
    @guest
    <div class="container mt-5">
        <div class="text-center mb-5">
            {{-- <h2>Bienvenido a tu Asistente Jurídico Virtual</h2> --}}
        </div>
        
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center shadow-sm">
                        <!-- Contenedor de imagen con proporción fija -->
                        <div class="image-container" style="width: 100%; height: 250px; overflow: hidden;">
                            <img src="https://conexionlegal.com/wp-content/uploads/2022/12/En-que-casos-puede-recibir-asesoria-legal-gratis-por-parte-de-Conexion-Legal.jpg" class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 100%; object-fit: cover;" alt="Chatbot Central">
                            {{-- <img src="{{ asset('storage/chatbot/central.jpg') }}" class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 100%; object-fit: cover;" alt="Chatbot Central"> --}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Chatbot Central</h5>
                            <p class="card-text" style="text-align: center">Adaptable a cualquier consulta.</p>
                            <a href="{{ url('/chatbot/central') }}" class="btn custom-button">Ir al Chatbot</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        
        <div class="row mt-4">
            <div class="col"></div>
            <div class="col-9">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title">¿Quieres una experiencia más personalizada?</h4>
                        <h6 class="card-text">Inicia sesión para obtener el máximo provecho de nuestros chatbots.</h6>
                        <a href="{{ url('/login') }}" class="btn custom-button">Iniciar Sesión</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>



        {{-- <div class="row mt-5">
            <div class="col-12">
                <h3 class="text-center mb-4">Preguntas Frecuentes</h3>
                <div class="accordion" id="faqAccordion">
                    <!-- Pregunta 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ¿Cómo funciona el chatbot?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                El chatbot te guiará con preguntas para identificar tu consulta y ofrecerte la mejor orientación legal de forma rápida y precisa.
                            </div>
                        </div>
                    </div>
        
                    <!-- Pregunta 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ¿Es gratis el servicio?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sí, puedes usar el chatbot de manera gratuita. Para consultas personalizadas, es posible que se requiera una sesión con un abogado.
                            </div>
                        </div>
                    </div>
        
                    <!-- Pregunta 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ¿Qué áreas del derecho cubre?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ofrecemos asesoría en Derecho Familiar, Económico, Laboral, Penal, Civil y Tributario, para ayudarte en diversas situaciones legales.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    @endguest        

        @auth
        <div class="container">
            <div class="row mt-4">
                <!-- Card 1: Asesoría Familiar -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center shadow-sm">
                        <div class="image-container" style="width: 100%; height: 250px; overflow: hidden;">
                            <img src="https://universidadeuropea.com/resources/media/images/que-es-abogado-familia-1200x630.original.jpg" class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 100%; object-fit: cover;" alt="Chatbot Central">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Asesoría Familiar</h5>
                            <p class="card-text">Recibe apoyo para resolver conflictos familiares, como divorcios, custodia de hijos y pensión alimenticia.</p>
                            <a href="{{ url('/chatbot/familiar') }}" class="btn custom-button">Ir al Chatbot</a>
                        </div>
                    </div>
                </div>
                
                
        
                <!-- Card 2: Asesoría Económica -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center shadow-sm">
                        <div class="image-container" style="width: 100%; height: 250px; overflow: hidden;">
                            <img src="https://img.freepik.com/fotos-premium/derecho-economico_1254992-95571.jpg" class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 100%; object-fit: cover;" alt="Chatbot Central">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Asesoría Economica</h5>
                            <p class="card-text">Recibe apoyo para resolver conflictos familiares, como divorcios, custodia de hijos y pensión alimenticia.</p>
                            <a href="{{ url('/chatbot/economica') }}" class="btn custom-button">Ir al Chatbot</a>
                        </div>
                    </div>
                </div>
        
                <!-- Card 3: Asesoría Laboral -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center shadow-sm">
                        <div class="image-container" style="width: 100%; height: 250px; overflow: hidden;">
                            <img src="https://www.postgradounab.cl/wp-content/uploads/2022/08/400x243-Que-es-el-Derecho-Penal-y-cuales-son-sus-caracteristicas.jpg"  class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 100%; object-fit: cover;" alt="Chatbot Central">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Asesoría Laboral</h5>
                            <p class="card-text">Recibe apoyo para resolver conflictos familiares, como divorcios, custodia de hijos y pensión alimenticia.</p>
                            <a href="{{ url('/chatbot/laboral') }}" class="btn custom-button">Ir al Chatbot</a>
                        </div>
                    </div>
                </div>

            <div class="row mt-4">
                <!-- Card 4: Asesoría Penal -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center shadow-sm">
                            <div class="image-container" style="width: 100%; height: 250px; overflow: hidden;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjXFwcyzi1jKg8B1fXsn6gVuKxdjL6TnN79A&s" class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 100%; object-fit: cover;" alt="Asesoría Penal">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Asesoría Penal</h5>
                            <p class="card-text">Recibe orientación en casos de acusaciones o procesos penales para defender tus derechos.</p>
                            <a href="{{ url('/chatbot/penal') }}" class="btn custom-button">Ir al Chatbot</a>
                        </div>
                    </div>
                </div>
        
                <!-- Card 5: Asesoría Civil -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center shadow-sm">
                        <div class="image-container" style="width: 100%; height: 250px; overflow: hidden;">
                            <img src="https://blog.lemontech.com/wp-content/uploads/2021/07/derecho-civil-ejemplos.jpg" class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 100%; object-fit: cover;" alt="Asesoría Civil">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Asesoría Civil</h5>
                            <p class="card-text">Asesórate en temas de contratos, propiedades, herencias y conflictos entre particulares.</p>
                            <a href="{{ url('/chatbot/civil') }}" class="btn custom-button">Ir al Chatbot</a>
                        </div>
                    </div>
                </div>
                
        
                <!-- Card 6: Asesoría Tributaria -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center shadow-sm">
                        <!-- Contenedor de imagen con proporción fija -->
                        <div class="image-container" style="width: 100%; height: 250px; overflow: hidden;">
                            <img src="https://asatconsultores.cl/sadmin/img_web/1987996623.jpeg" class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 100%; object-fit: cover;" alt="Asesoría Tributaria">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Asesoría Tributaria</h5>
                            <p class="card-text">Aclara tus dudas sobre impuestos, declaraciones fiscales y evita sanciones tributarias.</p>
                            <a href="{{ url('/chatbot/tributaria') }}" class="btn custom-button">Ir al Chatbot</a>
                        </div>
                    </div>
                </div>
                
            </div>
                
        
                
            </div>
        </div>
        
        @endauth
    </div>
</body>
@endsection
