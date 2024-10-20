<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-6">

            <div class="form-group">
                <h5>Imagen</h5>
                @if(isset($abogado->imagen))
                    <img class="img-thumbnail img-fluid" src="{{ asset('storage/' . $abogado->imagen) }}" width="100" alt="Imagen del Abogado">
                @endif
                <input type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen" id="imagen">
                @error('imagen')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="form-group">
                <h5>Rut</h5>
                <input id="rut_abogado" type="text" class="form-control @error('rut_abogado') is-invalid @enderror" name="rut_abogado" 
                       value="{{ isset($abogado->rut_abogado) ? $abogado->rut_abogado : old('rut_abogado') }}" required>
                @error('rut_abogado')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="form-group">
                <h5>Nombre</h5>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                       value="{{ isset($abogado->name) ? $abogado->name : old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="form-group">
                <h5>Especialidad</h5>
                <select class="form-control @error('especialidad') is-invalid @enderror" name="especialidad" id="especialidad" required>
                    <option value="">Selecciona una especialidad</option>
                    <option value="Civil" {{ (old('especialidad', isset($abogado->especialidad) ? $abogado->especialidad : '') == 'Civil') ? 'selected' : '' }}>Civil</option>
                    <option value="Economico" {{ (old('especialidad', isset($abogado->especialidad) ? $abogado->especialidad : '') == 'Economico') ? 'selected' : '' }}>Económico</option>
                    <option value="Familiar" {{ (old('especialidad', isset($abogado->especialidad) ? $abogado->especialidad : '') == 'Familiar') ? 'selected' : '' }}>Familiar</option>
                    <option value="Laboral" {{ (old('especialidad', isset($abogado->especialidad) ? $abogado->especialidad : '') == 'Laboral') ? 'selected' : '' }}>Laboral</option>
                    <option value="Penal" {{ (old('especialidad', isset($abogado->especialidad) ? $abogado->especialidad : '') == 'Penal') ? 'selected' : '' }}>Penal</option>
                    <option value="Tributaria" {{ (old('especialidad', isset($abogado->especialidad) ? $abogado->especialidad : '') == 'Tributaria') ? 'selected' : '' }}>Tributaria</option>
                </select>
                @error('especialidad')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            
            <div class="form-group">
                <h5>Email</h5>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                       value="{{ isset($abogado->email) ? $abogado->email : old('email') }}" required autocomplete="email">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="form-group">
                <h5>Sueldo</h5>
                <input id="sueldo" type="text" class="form-control @error('sueldo') is-invalid @enderror" name="sueldo" 
                       value="{{ isset($abogado->sueldo) ? $abogado->sueldo : old('sueldo') }}" required>
                @error('sueldo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="form-group">
                <h5>Teléfono</h5>
                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" 
                       value="{{ isset($abogado->telefono) ? $abogado->telefono : old('telefono') }}" required>
                @error('telefono')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="form-group">
                <h5>Biografía</h5>
                <textarea id="biografia" class="form-control @error('biografia') is-invalid @enderror" name="biografia" rows="2" required>{{ isset($abogado->biografia) ? $abogado->biografia : old('biografia') }}</textarea>
                @error('biografia')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            

            

            <div class="col text-center">
                <br>
                <button type="submit" class="btn btn-success btn-lg">{{ $modo }} Abogado</button>
                <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg">Regresar</a>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>