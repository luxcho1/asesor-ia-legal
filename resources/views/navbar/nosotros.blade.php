@extends('layouts.app')
@section('content')
@vite(['resources/css/nav-content.css'])
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10 col-12">
                <div class="text-center mb-4 card-2 rounded" style="height: 6%;">
                    <h2>¿Qué es AsesorIA Legal?</h2>
                </div>

                <div class="row">
                    <!-- Misión y Visión -->
                    <div class="col-12 mb-4">
                        <div class="p-4 card rounded">
                            <h3 class="fw-bold">Misión y Visión</h3>
                            <p>Ofrecer asesoría legal accesible, precisa y eficiente mediante la inteligencia artificial, ayudando a las personas a tomar decisiones informadas y conectándolas con expertos legales.</p>
                            <p>Ser la plataforma líder en asesoría legal en Chile, facilitando el acceso a la justicia para todos mediante el uso de tecnología avanzada.</p>
                        </div>
                    </div>

                    <!-- Historia del Proyecto -->
                    <div class="col-12 mb-4">
                        <div class="p-4 card rounded">
                            <h3 class="fw-bold">Historia del Proyecto</h3>
                            <p>La idea de crear una plataforma de asesoría legal con IA nació al reconocer las barreras que muchas personas enfrentan para acceder a servicios legales de calidad. Desde entonces, hemos trabajado para desarrollar una solución que utiliza la inteligencia artificial para ofrecer asesoría rápida, precisa y accesible.</p>
                        </div>
                    </div>

                    <!-- Impacto Social y Principios -->
                    <div class="col-12 mb-4">
                        <div class="p-4 card rounded">
                            <h3 class="fw-bold">Impacto Social y Principios</h3>
                            <p>Nuestro objetivo es hacer que el acceso a la justicia sea más equitativo y accesible, especialmente para aquellos que no pueden costear servicios legales tradicionales. Para ello los principios que guían el proyecto son:</p>
                            <ul>
                                <li><strong>Accesibilidad:</strong> Creemos que todas las personas, independientemente de su situación económica, merecen acceso a asesoría legal de calidad.</li>
                                <li><strong>Innovación:</strong> Aprovechamos la tecnología para transformar la manera en que las personas acceden a la justicia.</li>
                                <li><strong>Confidencialidad:</strong> Valoramos y protegemos la privacidad de nuestros usuarios en cada paso del proceso.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="text-center mb-4 p-3 card-2 rounded " style="height: 8%;">
                    <p>Únete a nosotros en nuestro camino para transformar el acceso a la asesoría legal. Regístrate hoy y descubre cómo podemos ayudarte.</p>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
