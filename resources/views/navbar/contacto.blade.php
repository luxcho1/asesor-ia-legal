@extends('layouts.app')
@section('content')
@vite(['resources/css/nav-content.css'])
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10 col-12">
                <!-- Contáctanos -->
                <div class="text-center mb-4">
                    <div class="p-4 card rounded">
                        <h3 class="fw-bold">Contáctanos</h3>
                        <p>En AsesorIA Legal, estamos comprometidos en brindarte el mejor servicio de asesoría legal. Si tienes alguna pregunta, comentario o necesitas asistencia personalizada, no dudes en ponerte en contacto con nosotros a través de los siguientes canales.</p>
                    </div>
                </div>

                <!-- Información de contacto -->
                <div class="mb-4">
                    <div class="p-4 card rounded">
                        <h4 class="fw-bold">Información de contacto</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Teléfonos:</strong><br>
                                    +56 9 9988 7766<br>
                                    +56 9 9988 7766
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Correo Electrónico:</strong><br> contacto@asesoria.cl</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulario de contacto -->
                <div class="mb-4">
                    <div class="p-4 card rounded">
                        <h4 class="fw-bold">Formulario de contacto</h4>
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" placeholder="Nombre" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="email" class="form-control" placeholder="Correo Electrónico" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" placeholder="Asunto" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Mensaje" required></textarea>
                            </div>
                            <div class="text-center">
                            <button type="submit" class="btn custom-button ">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Redes Sociales y Horarios de Atención -->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="p-4 card rounded">
                            <h4 class="fw-bold">Redes Sociales</h4>
                            <p>Mantente al día con nuestras últimas noticias y actualizaciones siguiéndonos en nuestras redes sociales:</p>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com" target="_blank" class="social-link" rel="noopener noreferrer">
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com" target="_blank" class="social-link" rel="noopener noreferrer">
                                        Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com" target="_blank" class="social-link" rel="noopener noreferrer">
                                        Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com" target="_blank" class="social-link" rel="noopener noreferrer">
                                        LinkedIn
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="p-4 card rounded h-100">
                            <h4 class="fw-bold">Horarios de Atención</h4>
                            <p><strong>Días Laborables:</strong><br>Lunes a Viernes: 9:00 - 18:00</p>
                            <p><strong>Fines de Semana:</strong><br>Sábados y Domingos: Cerrado</p>
                        </div>
                    </div>
                </div>

                <!-- Registro para Abogados -->
                <div class="text-center">
                    <div class="p-4 card rounded">
                        <p>¿Eres abogado y deseas unirte a nuestra plataforma? Regístrate aquí para expandir tu cartera de clientes y formar parte de nuestra red de profesionales legales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
