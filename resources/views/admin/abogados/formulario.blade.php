@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid py-4">
    <!-- Imagen -->
    <div class="row mb-3">
        <div class="col-md-3 text-center">
            <div class="form-group">
                @if(isset($abogado->imagen))
                    <img class="img-thumbnail img-fluid mb-2" src="{{ asset('storage/'.$abogado->imagen) }}" alt="Imagen del abogado" width="150">
                @endif
                <input type="file" class="form-control" name="imagen" id="imagen">
            </div>
        </div>

        <!-- Rut -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="rut_abogado" class="form-label h6">Rut</label>
                <input type="text" class="form-control form-control-sm" name="rut_abogado" id="rut_abogado" value="{{ isset($abogado->rut_abogado) ? $abogado->rut_abogado : old('rut_abogado') }}">
            </div>
        </div>

        <!-- Nombre -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="name" class="form-label h6">Nombre</label>
                <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{ isset($abogado->name) ? $abogado->name : old('name') }}">
            </div>
        </div>

        <!-- Especialidad -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="especialidad" class="form-label h6">Especialidad</label>
                <select class="form-control form-control-sm" name="especialidad" id="especialidad">
                    <option value="">Selecciona una especialidad</option>
                    <option value="Civil" {{ (isset($abogado->especialidad) && $abogado->especialidad == 'Civil') ? 'selected' : '' }}>Civil</option>
                    <option value="Economico" {{ (isset($abogado->especialidad) && $abogado->especialidad == 'Economico') ? 'selected' : '' }}>Económico</option>
                    <option value="Familiar" {{ (isset($abogado->especialidad) && $abogado->especialidad == 'Familiar') ? 'selected' : '' }}>Familiar</option>
                    <option value="Laboral" {{ (isset($abogado->especialidad) && $abogado->especialidad == 'Laboral') ? 'selected' : '' }}>Laboral</option>
                    <option value="Penal" {{ (isset($abogado->especialidad) && $abogado->especialidad == 'Penal') ? 'selected' : '' }}>Penal</option>
                    <option value="Tributaria" {{ (isset($abogado->especialidad) && $abogado->especialidad == 'Tributaria') ? 'selected' : '' }}>Tributaria</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Email y Teléfono -->
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="email" class="form-label h6">Email</label>
                <input type="email" class="form-control form-control-sm" name="email" id="email" value="{{ isset($abogado->email) ? $abogado->email : old('email') }}">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="telefono" class="form-label h6">Teléfono</label>
                <input type="text" class="form-control form-control-sm" name="telefono" id="telefono" value="{{ isset($abogado->telefono) ? $abogado->telefono : old('telefono') }}">
            </div>
        </div>

        <!-- Sueldo -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="sueldo" class="form-label h6">Sueldo</label>
                <input type="text" class="form-control form-control-sm" name="sueldo" id="sueldo" value="{{ isset($abogado->sueldo) ? $abogado->sueldo : old('sueldo') }}">
            </div>
        </div>
    </div>

    <!-- Biografía -->
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-group">
                <label for="biografia" class="form-label h6">Biografía</label>
                <textarea class="form-control form-control-sm" id="biografia" name="biografia" rows="2">{{ isset($abogado->biografia) ? $abogado->biografia : old('biografia') }}</textarea>
            </div>
        </div>
    </div>

    <!-- Botones -->
    <div class="row">
        <div class="col text-center">
            <button type="submit" class="btn btn-success btn-lg">{{ $modo }} Abogado</button>
            <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg">Regresar</a>
        </div>
    </div>
</div>
