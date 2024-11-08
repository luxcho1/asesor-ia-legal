@extends('layouts.app')
@section('content')
@vite(['resources/css/home.css', 'resources/js/home.js'])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@700&display=swap" rel="stylesheet">


<body>
<div class="container py-5 ">
    <div class="text-center mb-5 cb">
      <h2 class="fw-bold mb-3">Asesor-IA Legal</h2>
      <p class="lead">
        Una plataforma confiable para asesoría legal personalizada, 
        rápida y eficiente, con abogados expertos en diversas áreas del derecho.
      </p>
    </div>
  
    <div class="row align-items-center mb-5 cb">
      <div class="col-md-6">
        <h3 class="fw-semibold">¿Qué es Asesor-IA Legal?</h3>
        <p class="mt-3">
          Es una plataforma que te permite obtener asesoría legal 
          de forma sencilla. Nuestros abogados especializados en distintas ramas 
          del derecho te ayudarán a resolver cualquier problema legal con confianza y profesionalismo.
        </p>
      </div>
      <div class="col-md-6">
        <img src="https://enlinea.santotomas.cl/web/wp-content/uploads/sites/2/2022/09/derecho-ley-e1552664252875-1.jpg" alt="Legal Services" class="img-fluid rounded shadow-sm">
      </div>
    </div>
  
    <div class="row mb-5 cb">
      <div class="col-md-6">
        <h3 class="fw-semibold">¿Cómo funciona?</h3>
        <p class="mt-3">Sigue estos pasos para obtener asesoría legal:</p>
        <ol class="list-unstyled">
          <li class="mb-3 d-flex align-items-center">
            <span class="badge me-3">1</span>
            Selecciona el área del derecho en la que necesitas asesoría.
          </li>
          <li class="mb-3 d-flex align-items-center">
            <span class="badge me-3">2</span>
            Completa el formulario con la información necesaria.
          </li>
          <li class="mb-3 d-flex align-items-center">
            <span class="badge me-3">3</span>
            Espera a que uno de nuestros abogados se ponga en contacto contigo.
          </li>
        </ol>
      </div>
      <div class="col-md-6">
        <h3 class="fw-semibold">Nuestros Servicios</h3>
        <ul class="list-unstyled mt-3">
          <li class="mb-2">
            <i class="bi bi-chevron-right icono"></i> Derecho Civil
          </li>
          <li class="mb-2">
            <i class="bi bi-chevron-right icono"></i> Derecho Penal
          </li>
          <li class="mb-2">
            <i class="bi bi-chevron-right icono"></i> Derecho Laboral
          </li>
          <li class="mb-2">
            <i class="bi bi-chevron-right icono"></i> Derecho Familiar
          </li>
          <li class="mb-2">
            <i class="bi bi-chevron-right icono"></i> Derecho Corporativo
          </li>
        </ul>
      </div>
    </div>
  
    <div class="cb1 p-5 rounded shadow-sm">
      <h3 class="cb1-title text-center fw-semibold mb-4">Testimonios</h3>
      <div class="row">
        <div class="col-md-6">
          <blockquote class="blockquote border-start ps-4">
            <p class="cb1-text mb-2">"Asesor-IA Legal me ayudó a resolver mi caso rápidamente. ¡Muy recomendable!"</p>
            <footer class="blockquote-footer">Juan Pérez</footer>
          </blockquote>
        </div>
        <div class="col-md-6">
          <blockquote class="blockquote border-start ps-4">
            <p class="cb1-text mb-2">"Gracias a Asesor-IA, recibí la asesoría legal que necesitaba sin complicaciones."</p>
            <footer class="blockquote-footer">María López</footer>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
  

  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-md-3">
      </div>
  
      <div class="col-md-6 d-flex justify-content-center">
        <div class="card shadow-sm cb2">
          <img 
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhqVTDYk3uT9o7vDSCoLY74wTRfwq5Hd0XyP93qoXda_bSj2JoOe--8dVxKUIOodX6WX6-HGPEuOdEfEpIDwx0DwMnqCKwCHxPUB_SdBwm8Y15qTTjbaFzZzyjBIUhMllCWrVsPAMx51qUC4oCnm2ml5R8iNsKDMg41hGi9_ZGkFc-7JVJFOzFaBAe9/s587/saul-goodman.webp" 
            class="card-img-top" 
            alt="Abogado Especialista">
          <div class="card-body text-center">
            <p class="card-text text-muted mb-4">
              ¿Quieres conocer a nuestros primeros abogados especialistas en asesoría civil?
            </p>
            <a href="{{ url('/recomendacion/civil') }}" class="btn custom-button">
              Más Información
            </a>
          </div>
        </div>
      </div>
  
      <div class="col-md-3">
      </div>
    </div>
  </div>
  
</body>
@endsection
