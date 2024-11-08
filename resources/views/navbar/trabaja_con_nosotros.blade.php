@extends('layouts.app')
@section('content')
@vite(['resources/css/nav-content.css'])
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10 col-12">
                <div class="card mb-5">
                    
                        <h3 class="text-center mb-4">Unete a Nuestra Red de Abogados</h3>
                        <p>En AsesorIA Legal, creemos en la colaboración entre profesionales legales y 
                            tecnología avanzada para ofrecer el mejor servicio a nuestros usuarios. Al unirte
                             a nuestra plataforma, tendrás acceso a una amplia gama de beneficios diseñados para impulsar 
                             tu carrera y facilitar la conexión con clientes que necesitan tus servicios especializados.</p>
                    
                </div>
                <div class="card mb-5">
                    <h3 class="text-center mb-4 container">Ventajas de Ser Parte de AsesorIA Legal</h3>
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <div class="card-2 h-100">
                                <h4 class="text-center">Acceso a Base de Clientes</h4>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="card-2 h-100">
                                    <h4 class="text-center">Herramienta de Gestion de Clientes</h4>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="card-2 h-100">
                                    <h4 class="text-center">Flexibilidad y Autonomia</h4>
                                </div>
                            </div>
                        </div>

                </div>
                <h1 class="text-center card-2">Registro de Abogados</h1>
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf

                    <!-- Datos Personales -->
                    <div class="card mt-5 mb-4">
                        <div class="card-header">Datos Personales</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="rut" class="form-label">RUT</label>
                                <input type="text" class="form-control" id="rut" name="rut" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                    </div>

                    <!-- Formación Académica -->
                    <div class="card mb-4">
                        <div class="card-header">Formación Académica</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="university" class="form-label">Universidad</label>
                                <input type="text" class="form-control" id="university" name="university" required>
                            </div>
                            <div class="mb-3">
                                <label for="graduation_year" class="form-label">Año de Graduación</label>
                                <input type="number" class="form-control" id="graduation_year" name="graduation_year" min="1900" max="{{ date('Y') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="specialization" class="form-label">Especialización o Posgrados</label>
                                <input type="text" class="form-control" id="specialization" name="specialization">
                            </div>
                        </div>
                    </div>

                    <!-- Licencia Profesional -->
                    <div class="card mb-4">
                        <div class="card-header">Licencia Profesional</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="license_number" class="form-label">Número de Licencia (Corte Suprema)</label>
                                <input type="text" class="form-control" id="license_number" name="license_number" required>
                            </div>
                            <div class="mb-3">
                                <label for="license_date" class="form-label">Fecha de Habilitación</label>
                                <input type="date" class="form-control" id="license_date" name="license_date" required>
                            </div>
                        </div>
                    </div>

                    <!-- Áreas de Práctica Legal -->
                    <div class="card mb-4">
                        <div class="card-header">Áreas de Práctica Legal</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="practice_areas" class="form-label">Áreas de Práctica Legal</label>
                                <select multiple class="form-select" id="practice_areas" name="practice_areas[]" required>
                                    <option value="civil">Civil</option>
                                    <option value="penal">Penal</option>
                                    <option value="laboral">Laboral</option>
                                    <option value="familiar">Familiar</option>
                                    <option value="tributario">Tributario</option>
                                    <option value="corporativo">Corporativo</option>
                                    <option value="propiedad_intelectual">Propiedad Intelectual</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Experiencia Profesional -->
                    <div class="card mb-4">
                        <div class="card-header">Experiencia Profesional</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="experience" class="form-label">Años de Experiencia</label>
                                <input type="number" class="form-control" id="experience" name="experience" min="0" required>
                            </div>
                            <div class="mb-3">
                                <label for="notable_cases" class="form-label">Casos Destacados o Experiencia Relevante</label>
                                <textarea class="form-control" id="notable_cases" name="notable_cases"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Disponibilidad y Ubicación -->
                    <div class="card mb-4">
                        <div class="card-header">Disponibilidad y Ubicación</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="location" class="form-label">Región/Comuna de Ejercicio</label>
                                <input type="text" class="form-control" id="location" name="location" required>
                            </div>
                            <div class="mb-3">
                                <label for="availability" class="form-label">Disponibilidad (En línea o Presencial)</label>
                                <select class="form-select" id="availability" name="availability" required>
                                    <option value="online">En línea</option>
                                    <option value="presencial">Presencial</option>
                                    <option value="ambos">Ambos</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Idiomas -->
                    <div class="card mb-4">
                        <div class="card-header">Idiomas</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="languages" class="form-label">Idiomas Hablados</label>
                                <input type="text" class="form-control" id="languages" name="languages">
                            </div>
                        </div>
                    </div>

                    <!-- Documentación Adjunta -->
                    <div class="card mb-4">
                        <div class="card-header">Documentación Adjunta</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="title_document" class="form-label">Copia del Título Profesional</label>
                                <input type="file" class="form-control" id="title_document" name="title_document" required>
                            </div>
                            <div class="mb-3">
                                <label for="supreme_court_certificate" class="form-label">Certificado de la Corte Suprema</label>
                                <input type="file" class="form-control" id="supreme_court_certificate" name="supreme_court_certificate" required>
                            </div>
                            <div class="mb-3">
                                <label for="background_certificate" class="form-label">Certificado de Antecedentes</label>
                                <input type="file" class="form-control" id="background_certificate" name="background_certificate">
                            </div>
                        </div>
                    </div>

                    <!-- Testimonios o Referencias -->
                    <div class="card mb-4">
                        <div class="card-header">Testimonios o Referencias</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="testimonials" class="form-label">Testimonios o Referencias</label>
                                <textarea class="form-control" id="testimonials" name="testimonials"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Botón de Enviar -->
                    <div class="text-center">
                        <button type="submit" class="btn custom-button">Registrar Abogado</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
