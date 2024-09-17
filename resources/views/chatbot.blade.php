@extends('layouts.app')
@section('content')
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card text-center" style="max-width: 50%; margin: auto;">
                <img src="https://botnation.ai/site/wp-content/uploads/2024/01/chatbot-juridique-1200x800.webp" class="card-img-top" alt="Chatbot Central">
                <div class="card-body">
                <h5 class="card-title">Chatbot Central</h5>
                <p class="card-text">Bienvenido al Chatbot Central. Selecciona una especialidad para recibir asesoría legal.</p>
                <a href="{{ url('/chatbot/familiar') }}" class="btn btn-primary">Ir al Chatbot</a>
                </div>
            </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="https://coachingeducacional.cl/wp-content/uploads/2021/01/hombre-abrazando-su-familia-idilica_1098-3979.jpg" class="card-img-top" alt="Asesoría Familiar">
                    <div class="card-body">
                        <h5 class="card-title">Asesoría Familiar</h5>
                        <p class="card-text">Recibe ayuda en temas de derecho familiar.</p>
                        <a href="{{ url('/chatbot/familiar') }}" class="btn btn-primary">Ir al Chatbot</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu4nw0xEnSNM1g1oPKWg1Jf0z0jBcpr7YLoA&s" class="card-img-top" alt="Asesoría Económica">
                    <div class="card-body">
                        <h5 class="card-title">Asesoría Económica</h5>
                        <p class="card-text">Recibe ayuda en temas de derecho económico.</p>
                        <a href="{{ url('/chatbot/economica') }}" class="btn btn-primary">Ir al Chatbot</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="https://cdn-djofm.nitrocdn.com/WjoXHXoHpfBdXZlvPuSfCAvVJQOBuCMC/assets/images/optimized/rev-4106fa4/abogadosconexperiencia.com/wp-content/uploads/AdobeStock_509838763-1260x839.jpeg" class="card-img-top" alt="Asesoría Laboral">
                    <div class="card-body">
                        <h5 class="card-title">Asesoría Laboral</h5>
                        <p class="card-text">Recibe ayuda en temas de derecho laboral.</p>
                        <a href="{{ url('/chatbot/laboral') }}" class="btn btn-primary">Ir al Chatbot</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjXFwcyzi1jKg8B1fXsn6gVuKxdjL6TnN79A&s" class="card-img-top" alt="Asesoría Penal">
                    <div class="card-body">
                        <h5 class="card-title">Asesoría Penal</h5>
                        <p class="card-text">Recibe ayuda en temas de derecho penal.</p>
                        <a href="{{ url('/chatbot/penal') }}" class="btn btn-primary">Ir al Chatbot</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="https://blog.lemontech.com/wp-content/uploads/2021/07/derecho-civil-ejemplos.jpg" class="card-img-top" alt="Asesoría Civil">
                    <div class="card-body">
                        <h5 class="card-title">Asesoría Civil</h5>
                        <p class="card-text">Recibe ayuda en temas de derecho civil.</p>
                        <a href="{{ url('/chatbot/civil') }}" class="btn btn-primary">Ir al Chatbot</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="https://asatconsultores.cl/sadmin/img_web/1987996623.jpeg" class="card-img-top" alt="Asesoría Tributaria">
                    <div class="card-body">
                        <h5 class="card-title">Asesoría Tributaria</h5>
                        <p class="card-text">Recibe ayuda en temas de derecho tributario.</p>
                        <a href="{{ url('/chatbot/tributaria') }}" class="btn btn-primary">Ir al Chatbot</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
